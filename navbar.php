<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="contact.php">Contact</a></li>
		<li><a href="login.php">Logout</a></li>
		<li><a id="user" class="user"> <?php session_start(); echo $_SESSION["name"];?> </a></li>
    </ul>
</nav>