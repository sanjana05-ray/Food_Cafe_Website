<html>
	<head>
		<title>Food Detail Insertion Form</title>
	<head>
	<body>
		<?php include("config/config.php");?>
		
		<form method="post">
			Enter Food Category:
			<select name="select">
				<option name="opt">Choose a Category</option>
				<option>Appetizers</option>
				<option>Main Courses</option>
				<option>Desserts</option>
				<option>Drinks</option>
			</select><br><br>
			Enter Food Name: <input name="f_name" type="text" required><br><br>
			Enter Description:<br>
			<textarea name="ta" rows="5" cols="100" required></textarea><br><br>
			Enter Image Name(.extension): <input name="i_name" type="text" required><br><br>
			Enter Food Price <input name="f_price" type="number" required><br><br>
			<input type="submit" name="submit" value="Submit">
		</form>
		
		<?php
			if($_SERVER["REQUEST_METHOD"]=="POST") {
				if($conn) {
					$q = "create table if not exists menuItems(m_id int primary key auto_increment, m_category varchar(30), m_imagePath varchar(255), m_name varchar(255), m_description varchar(500), m_price int);";
					$r = mysqli_query($conn,$q);
					
					if($_POST["select"] == "opt") {
						echo "Choose a Category";
						header("Location: foodDetails.php");
						exit();
					}
					
					$q = "insert into menuItems(m_category, m_imagePath, m_name, m_description, m_price) values ('".$_POST["select"]."','".$_POST["i_name"]."','".$_POST["f_name"]."','".$_POST["ta"]."',".$_POST["f_price"].");";
					$r = mysqli_query($conn,$q);
					header("Location: admin.php");
					exit();
				}
				else {
					echo "No Connection Established";
				}
			}
		?>

		<?php include("footer.php");?>
	</body>
</html>