<?php
require_once "config.php";
    session_start();
    $name = $_SESSION["username"];
    $img = $_POST["image"];
    $folderPath = "img/";

    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.jpg';

    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);

    print_r($fileName);
    print_r("----");
    print_r($name);

    $sql = "INSERT INTO `face_img`(`id`, `username`, `FaceImg`) VALUES ('','$name','$fileName')";
    $result = $link -> query($sql);
    echo "<script>window.location.href = 'face.php';</script>"
?>