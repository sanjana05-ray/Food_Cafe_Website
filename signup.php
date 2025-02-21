<?php
	include("config/config.php");
	
	$s_name = $_POST["signup_name"];
	$s_email = $_POST["signup_email"];
	$s_pass = $_POST["signup_pass"];
	
	$s = explode('@',$s_email);
	
	if($s[1] == "gmail.com") {
		if($conn){
			$q = "create table if not exists signin(s_id int primary key auto_increment, s_name varchar(30), s_email varchar(50), s_password varchar(50));";
			$res = mysqli_query($conn,$q);
			
			$q = "select * from signin where s_email = '".$s_email."'";
			$res = mysqli_query($conn,$q);
			
			if(mysqli_num_rows($res)>0){
				while($row = mysqli_fetch_assoc($res)){
					if($row['s_email'] == $s_email){
						 echo "<html><body><h3>Already Exists</h3></body></html>";
						 include("login.php");
					}
				}	
			}
			else{
				$q2 = "insert into signin(s_name, s_email, s_password) values ('".$s_name."','".$s_email."','".$s_pass."')";
				$res = mysqli_query($conn, $q2);
				
				if($res) {
					header("Location: login.php");
					exit();
				}
				else echo "Not Created";
			}
		}
		else echo "Not Connected to Database";
	}
	else {
		echo "<html><body><h3>Enter a valid email</h3></body></html>";
		include("login.php");
	}

?>