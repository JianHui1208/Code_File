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
// session_start();
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("location: welcome.php");
//     exit;
// }

$username = $userpassword = "";
$username_Err = $userpassword_Err = "";

if (isset($_POST["login"])) {

	if (empty(trim($_POST["username"]))) {
		$username_Err = "Please Enter Your UserName.";
	}else{
		$username = trim($_POST["username"]);
	}

	if(empty(trim($_POST["userpassword"]))){
		$userpassword_Err = "Please Enter Your Password.";
	}else{
		$userpassword = trim($_POST["userpassword"]);
	}

	if (empty($username_Err) && empty($userpassword_Err)) {
		$sql = "SELECT username, password FROM customeraccount WHERE username = ?";

		if ($stmt = mysqli_prepare($conn, $sql)) {
			mysqli_stmt_bind_param($stmt,"s",$param_username);
			$param_username = $username;
			if (mysqli_stmt_execute($stmt)) {
				mysqli_stmt_store_result($stmt);
				if (mysqli_stmt_num_rows($stmt) == 1) {
					mysqli_stmt_bind_result($stmt,$username,$password);
					if (mysqli_stmt_fetch($stmt)) {
						if ($userpassword === $password) {
							session_start();
							$_SESSION["loggedin"] = true;
							$_SESSION["username"] = $username;
							$_SESSION["password"] = $userpassword;
							header("location: welcome.php");
						}else{
							$userpassword_Err = "The password you entered was not valid.";	
						}
					}
				}else{
					$username_Err = "No account found with that username.";
				}
			}else{
				echo "Somethings went wrong. Please try again later.";
			}
			mysqli_stmt_close($stmt);
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login Pages</title>
</head>
<body>
	<H1>LOGIN PAGES</H1>
	<form action="welcome.php" method="POST">
		<div>
			<label>User Name: </label>
			<input type="text" name="username" value="<?php echo $username; ?>">
			<span><?php echo $username_Err ?></span>
		</div>
		<div>
			<label>User Password: </label>
			<input type="text" name="userpassword" value="<?php echo $userpassword; ?>">
			<span><?php echo $userpassword_Err ?></span>
		</div>
		<div>
			<input type="submit" name="login">
		</div>
	</form>
</body>
</html>