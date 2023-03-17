<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<title>loginform</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="" method="POST">
			<table border="0">
				<tr><td>UserName:</td><td><input type="text" name="un"></td></tr>
				<tr><td>Password:</td><td><input type="password" name="pw"></td></tr>
				<tr><td></td><td><input type="submit" name="loginbtn" value="Login"></td></tr>
			</table>
		</form>
		</body>
		<?php
		if (isset($_POST['loginbtn'])) {
			$un=$_POST['un'];
			$pw=$_POST['pw'];
			
			include"connection.php";
			$query=mysqli_query($conn,"select * from users where username='$un' and password='$pw'");
			if(mysqli_num_rows($query)>0)
			{
				echo"<script>alert('MORNING TO EVERYONE')</script>";
				header("refresh:3;");
			}
			else{
				echo"password or username are incorrect";
				header("refresh:3;");
			}
		}




		?>

</body>
</html>