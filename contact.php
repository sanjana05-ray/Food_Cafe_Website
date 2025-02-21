<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Food Cafe</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include('navbar.php'); ?>

    <section id="contact">
        <h1>Contact Us</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            echo "<p>Thank you, $name! We will get back to you at $email soon.</p>";
        } else {
        ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">Submit</button>
            </form>
        <?php
        }
        ?>
    </section>

    <?php include('footer.php'); ?>
</body>
</html>