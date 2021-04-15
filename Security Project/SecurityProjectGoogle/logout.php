<?php
include('Config.php');
session_start();
$google_client = new Google_Client();
//Reset OAuth access token

//Destroy entire session data.
session_destroy();
$google_client->revokeToken($_SESSION['access_token']);
//redirect page to index.php
header('location:login.php');
?>