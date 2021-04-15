<?php

require_once "config.php";

if (isset($_POST['delete'])) {
    if (empty($_REQUEST['item'])) {
        echo "<script>alert('Must be Select One Account');</script>";
    }else{
        foreach ($_REQUEST['item'] as $deleteID) {
            //delete the item with the username
            $sql = "DELETE from users where id = '$deleteID'";
            $result = $link -> query($sql);
        }
    }
    echo "<script>window.location.assign('delete.php');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin delete Pages</title>
	<link rel="icon" href="../mario.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
        .center{
            margin: auto;
            max-width: 380px;
            border: 3px solid #73AD21;
            padding: 10px;
        }
    </style>
</head>
<body>
        <p style="font-size: 50px; text-align: center; padding-top: 20px;">Admin Edit Pages</p>
		<br><br>
		<form action="delete.php" method="POST" class="center">
		<div>
			<table style="width: 400px;">
					<tr>
						<td>
							&nbsp;
						</td>
						<td>
							<p>User ID</p>
						</td>
						<td>
							<p>User Name</p>
						</td>
						<td>
							<p>User Image</p>
						</td>
					</tr>

					<?php 
		                $sql = "select * from users";
		                $result = $link->query($sql);
		                if($result->num_rows > 0){
		                    while ($row = $result->fetch_assoc()) {
		                        //display Result
		                        $id = $row['id'];
		                        $username = $row['username'];
		                        $Image = $row['Image'];
		            ?>

					<tr>
						<td>
							<input type="checkbox" name="item[]" value="<?php echo $id; ?>">
						</td>
						<td>
							<!-- <a href="EmployeePages.php?id=<?php echo $id; ?>"> -->
							<?php
			                    echo $id;
			                ?>
						</td>
						<td>
		                    <?php
		                    echo $username;
		                    ?>
						</td>
						<td>
							<?php
		                    echo $Image;
		                    ?>
						</td>
					</tr>

					    <?php
					        }//end while
					    }//end if
					    ?>
				</table>
		</div>
		<br><br>
            <!-- <button name="delete" type="submit" class="btn btn-danger btn-xss">Delete</button> -->
            <input type="submit" name="delete" class="btn btn-default" value="Delete" onclick="window.location.href='delete.php'; alert('Are you sure to delete the account?');" style="background-color: red; color: white;" >
            <input type="button" class="btn btn-primary" value="Create Pages" onclick="window.location.href='register.php';">
		</form>
</body>
</html>