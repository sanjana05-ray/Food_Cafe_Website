<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="css/design.css">
    <title>Login Page</title>

</head>
<body>
    <div class="container" id="container">
        <div class="sign-up">
            <form action="signup.php" method="post">
                <h1>Create Account</h1>
                <div class="icons">
                    <a href="#"class=icon><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"class=icon><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"class=icon><i class="fa-brands fa-google"></i></a>
                    <a href="#"class=icon><i class="fa-brands fa-github"></i></a>
                </div>
                <span>or use email for registration</span>
                <input type="text" name="signup_name" required placeholder="Name">
                <input type="text" name="signup_email" required placeholder="Email">
                <input type="password" name="signup_pass" required placeholder="password">
                <button>sign-up</button>
            </form>
        </div>
        <div class="sign-in">
            <form action="signin.php" method="post">
                <h1>Sign In</h1>
                <div class="icons">
                    <a href="#"class=icon><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"class=icon><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"class=icon><i class="fa-brands fa-google"></i></a>
                    <a href="#"class=icon><i class="fa-brands fa-github"></i></a>
                </div>
                <span>or use email password</span>
                <input type="text" name="signin_email" required placeholder="Email">
                <input type="password" name="signin_pass" required placeholder="password">
                <a href="#">Forgot password</a>
                <button>sign-in</button>
            </form>
        </div>
        <div class="toogle-container">
            <div class="toogle">
                <div class="toogle-panel toogle-left">
                    <h1>Welcome User!</h1>
                    <p>If you already have an account</p>
                    <button class="hidden" id="login">Sign in</button>
                </div>

                <div class="toogle-panel toogle-right">
                    <h1>Hello, User!</h1>
                    <p>If you don't have an account</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>