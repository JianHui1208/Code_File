<?php
    $PIN = "";
    $Number = rand(1,9999);

    if (strlen($Number) == 1) {
        $Number_1 = "000".$Number;
    }elseif (strlen($Number) == 2) {
        $Number_1 = "00".$Number;
    }elseif (strlen($Number) == 3) {
        $Number_1 = "0".$Number;
    }elseif (strlen($Number) == 4) {
        $Number_1 = $Number;
    }

    $Number_1_Hash = password_hash($Number_1, PASSWORD_DEFAULT);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $PIN = trim($_POST["PIN"]);
        if (password_verify($PIN, $Number_1_Hash)) {    
            echo "<script>alert('PIN is valid');</script>";
            echo "<script>window.location.assign('index.php')</script>";
        } else {
            echo "<script>alert('PIN is Fail');</script>";
            echo "<script>window.location.assign('index.php')</script>";
        }
    }
?>