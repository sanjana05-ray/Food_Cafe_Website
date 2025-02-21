<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Food Cafe</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
		include('navbar.php');
		include('config/config.php');
		
		if($conn) {
			$q = "select * from menuItems;";
			$r = mysqli_query($conn,$q);
			
			$menu_items = [];
			
			if(mysqli_num_rows($r)>0) {
				while($rows=mysqli_fetch_assoc($r)) {
					$menu_items[] = $rows;
				}
			}
		}
		else {
			echo "No Connection Established";
		}
	?>

    <section id="menu">
        <h1>Our Menu</h1>
		<!-- Testing to Retrieve the value -->
		
		<div class="menu-category">
			<h2>Appetizers</h2>
			<div class="menu-items">
			<?php
				if(!empty($menu_items)){
					foreach($menu_items as $items) {
						if($items["m_category"] == "Appetizers") { ?>
							<div class="menu-item">
							<?php echo '<img src="images/'.$items["m_imagePath"].'" alt="'.$items["m_name"].'">';?>
							<?php echo '<h3>'.$items["m_name"].'</h3>'; ?>
							<?php echo '<p>'.$items["m_description"].'</p>'; ?>
							<?php echo '<p>Rs.'.$items["m_price"].'</p></div>';
						}
					}
				}
			?>
			</div>
		</div>
		
		<div class="menu-category">
			<h2>Main Courses</h2>
			<div class="menu-items">
			<?php
				if(!empty($menu_items)){
					foreach($menu_items as $items) {
						if($items["m_category"] == "Main Courses") { ?>
							<div class="menu-item">
							<?php echo '<img src="images/'.$items["m_imagePath"].'" alt="'.$items["m_name"].'">';?>
							<?php echo '<h3>'.$items["m_name"].'</h3>'; ?>
							<?php echo '<p>'.$items["m_description"].'</p>'; ?>
							<?php echo '<p>Rs.'.$items["m_price"].'</p></div>';
						}
					}
				}
			?>
			</div>
		</div>
		
		<div class="menu-category">
			<h2>Desserts</h2>
			<div class="menu-items">
			<?php
				if(!empty($menu_items)){
					foreach($menu_items as $items) {
						if($items["m_category"] == "Desserts") { ?>
							<div class="menu-item">
							<?php echo '<img src="images/'.$items["m_imagePath"].'" alt="'.$items["m_name"].'">';?>
							<?php echo '<h3>'.$items["m_name"].'</h3>'; ?>
							<?php echo '<p>'.$items["m_description"].'</p>'; ?>
							<?php echo '<p>Rs.'.$items["m_price"].'</p></div>';
						}
					}
				}
			?>
			</div>
		</div>
		
		<div class="menu-category">
			<h2>Drinks</h2>
			<div class="menu-items">
			<?php
				if(!empty($menu_items)){
					foreach($menu_items as $items) {
						if($items["m_category"] == "Drinks") { ?>
							<div class="menu-item">
							<?php echo '<img src="images/'.$items["m_imagePath"].'" alt="'.$items["m_name"].'">';?>
							<?php echo '<h3>'.$items["m_name"].'</h3>'; ?>
							<?php echo '<p>'.$items["m_description"].'</p>'; ?>
							<?php echo '<p>Rs.'.$items["m_price"].'</p></div>';
						}
					}
				}
			?>
			</div>
		</div>

    </section>

    <?php include('footer.php'); ?>
</body>
</html>