<?php

$key = "YOURKEY";
$uploadhost = "http://YOURSITE.TLD";
$redirect = "http://YOURSITE.TLD";

function doScript() {
	$parts = explode(".", $_FILES["FileUpload"]["name"]);
	$target = getcwd()."/" . bin2hex(openssl_random_pseudo_bytes(5)) . "." . end($parts);
	if(file_exists($target)) {
		doScript();
	} else {
		if(move_uploaded_file($_FILES["FileUpload"]["tmp_name"], $target)) {
			$target_parts = explode("/public_html/", $target);
			echo "http://YOURSITE.TLD" . end($target_parts);
		} else {
			header('Location: '.$redirect.' Upload error (Ensure your directory has 777 permissions). Target file was '.$target);
		}
	}
}

if(isset($_GET['key'])) {
	if($_GET['key'] == $key) {
		doScript();
	}
}
?>
