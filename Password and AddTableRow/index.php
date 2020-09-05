<?php
 
// //Generate a timestamp using mt_rand.
// $timestamp = mt_rand(1, time());
 
// //Format that timestamp into a readable date string.
// $randomDate = date("d M Y", $timestamp);
 
// //Print it out.
// echo $randomDate;

    // $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    // $pass = array(); //remember to declare $pass as an array
    // $alphaLength = strlen($alphabet) - 2; //put the length -1 in cache
    // for ($i = 0; $i < 10; $i++) {
    //     $n = rand(0, $alphaLength);
    //     $pass[] = $alphabet[$n];
    // }
    // echo implode($pass);
    // echo ("<br>");
   	$font = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ') , 1 , 2 );
    $center = substr(str_shuffle('0123456789') , 1 , 4 );
    $back = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ') , 1 , 1 );
    
    $password = $font.$center.$back; 
    echo $password;
    echo "<script>alert('Password is $password')</script>";
?>