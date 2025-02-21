<?php
	session_start();
	include("config/config.php");
	
	$s_email =  $_POST["signin_email"];
	$s_pass = $_POST["signin_pass"];
	
	if($conn)
	{
		$q = "select * from signin where s_email = '".$s_email."' AND s_password = '".$s_pass."';";
		$res = mysqli_query($conn,$q);
		
		if(mysqli_num_rows($res)>0) {
			while($row = mysqli_fetch_assoc($res)) {
				if($row["s_email"] == "admin123@gmail.com") {
					$_SESSION["name"] = $row["s_name"];
					header("Location: admin.php");
					exit();
				}
				else if($row["s_email"] == $s_email && $row["s_password"] == $s_pass) {
					$_SESSION["name"] = $row["s_name"];
					header("Location: index.php");
					exit();
				}
			}
		}
		else {
			echo "<html><body><h3>invalid emailid or invalid password</h3></body><html>";
			include("login.php");
		}
	}
	else echo "Connection Not Established";
?>