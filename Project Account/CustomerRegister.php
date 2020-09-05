<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "projectaccount";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$UserName = $UserEmail = $UserPhoneNumber = $UserPassword = "";
$UserName_Err = $UserEmail_Err = $UserPhoneNumber_Err = $UserPassword_Err = "";

if (isset($_POST["insert"])) {

	if(empty(trim($_POST["UserName"]))){
		$UserName_Err = "Please Enter Your Name";
	}else{
		$UserName = trim($_POST["UserName"]);			
	}

	if(empty(trim($_POST["UserEmail"]))){
		$UserEmail_Err = "Please Enter Your Email";
	}else{
		$UserEmail = trim($_POST["UserEmail"]);
	}

	if(empty(trim($_POST["UserPhoneNumber"]))){
		$UserPhoneNumber_Err = "Please Enter Your Phone Number";
	}else{
		$UserPhoneNumber = trim($_POST["UserPhoneNumber"]);
	}

	if(empty(trim($_POST["UserPassword"]))){
		$UserPassword_Err = "Please Enter Your Phone Number";
	}else{
		$UserPassword = trim($_POST["UserPassword"]);
	}

	$sql = "INSERT INTO `customeraccount` VALUE('$UserName','$UserEmail','$UserPhoneNumber','$UserPassword')";

	$result = $conn -> query($sql);

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer Register</title>
	<link rel="stylesheet" type="text/css" href="">
	<script type="text/javascript">
		function TestMe1() {
			var a = document.getElementById("pw1").value;
			var b = document.getElementById("pw2").value;
			if(a != b){
				alert("Password did not match.");
			}
		}
	</script>
</head>
<body>
	<h1>Sign Up</h1>
	<form action="CustomerRegister.php" method="POST">
		<div>
			<label>User Name: </label>
			<input type="text" name="UserName" value="<?php echo $UserName; ?>">
			<span><?php echo $UserName_Err; ?></span>
		</div>
		<div>
			<label>User Email: </label>
			<input type="text" name="UserEmail" value="<?php echo $UserEmail; ?>">
			<span><?php echo $UserEmail_Err; ?></span>
		</div>
		<div>
			<label>User PhoneNumber: </label>
			<input type="text" name="UserPhoneNumber" value="<?php echo $UserPhoneNumber; ?>">
			<span><?php echo $UserPhoneNumber_Err; ?></span>
		</div>
		<div>
			<label>User Password: </label>
			<input type="password" name="UserPassword" id ="pw1" value="<?php echo $UserPassword; ?>">
			<span><?php echo $UserPassword_Err; ?></span>
		</div>
		<div>
			<label>Confirm Password: </label>
			<input type="password" id ="pw2">
		</div>
		<div>
			<input type="submit" name="insert" onclick="TestMe1()">
		</div>
	</form>
</body>
</html>