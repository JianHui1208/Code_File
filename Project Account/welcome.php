<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: LoginPages.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<h1>hi <b><?php echo htmlspecialchars($_POST["username"]); ?></b> welcome</h1>
</body>
</html>