<?php

$key = "hehexd123";
$uploadhost = "https://i.weeb.wtf/";
$redirect = "https://i.weeb.wtf";

if (isset($_GET['key'])) {
    if ($_GET['key'] == $key) {
        $parts = explode(".", $_FILES["FileUpload"]["name"]);
        $target = getcwd()."/" . bin2hex(openssl_random_pseudo_bytes(5)) . "." . end($parts);
        if (move_uploaded_file($_FILES["FileUpload"]["tmp_name"], $target)) {
            $target_parts = explode("/weeb/i.weeb.wtf/", $target);
            echo $uploadhost . end($target_parts);
        } else {
            header('Location: '.$redirect.' Upload error (Ensure your directory has 777 permissions). Target file was '.$target);
        }
    } else {
        header('Location: '.$redirect.' Invalid key');
    }
} else {
    header('Location: '.$redirect.' Key not set');
}
?>
