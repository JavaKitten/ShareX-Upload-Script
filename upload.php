<?php

$directory = "public_html";
$key = "SPECIAL_KEY";
$uploadhost = "http://YOURWEBSITE";
$redirect = "http://YOURWEBSITE";

if (isset($_GET['key'])) {
    if ($_GET['key'] == $key) {
        $parts = explode(".", $_FILES["FileUpload"]["name"]);
        $target = getcwd()."/i/" . time() . "-" . bin2hex(openssl_random_pseudo_bytes(8)) . "." . end($parts);
        if (move_uploaded_file($_FILES["FileUpload"]["tmp_name"], $target)) {
            $target_parts = explode($directory, $target);
            echo $uploadhost . end($target_parts);
        } else {
            header('Location: '.$redirect.'Error: Make sure your directory has 777 permissions Target file was '.$target);
        }
    } else {
        header('Location: '.$redirect.'Error: Invalid key');
    }
} else {
    header('Location: '.$redirect.'Error: Key not set');
}
?>