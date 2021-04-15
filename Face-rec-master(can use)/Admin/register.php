<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = $image = "";
$username_err = $password_err = $confirm_password_err = $image_err = "";

    $font = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ') , 1 , 2 );
    $center = substr(str_shuffle('0123456789') , 1 , 4 );
    $back = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ') , 1 , 1 );
    $password = $font.$center.$back; 

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Cannot delete a password.";     
    } else{
        $password = trim($_POST["password"]);
    }
    if(empty(trim($_POST["image"]))){
        $image_err = "Must be enter the Image";
    }else{
        $image = trim($_POST["image"]);
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err)){
        
        $sql = "INSERT INTO users (username, password, image, passwordS) VALUES (?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ssss", $param_username,$param_password, $param_image, $param_passwordS);
            
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_image = $image;
            $param_passwordS = $password;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: register.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Register Pages</title>
    <link rel="icon" href="../mario.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px; }
        .wrapper{ width: 350px; padding: 20px; border: 3px solid #73AD21; margin: auto; margin-top: 60px;}
    </style>
</head>
<body>
    <h2 style="text-align: center; padding-top: 20px;"><b>Admin Create Account Pages</b></h2>
    <div class="wrapper">
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="text" name="password" class="form-control" value="<?php echo $password; ?>" style="width: 88px;" readonly>
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                <label>User Image</label>
                <input type="file" name="image" value="<?php echo $image; ?>">
                <span class="help-block"><?php echo $image_err; ?></span>
            </div> 
            <div class="form-group">
                <input type="button" class="btn btn-default" value="Delete Pages" onclick="window.location.href='delete.php';" style="background-color: red; color: white;" >
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>    
</body>
</html>