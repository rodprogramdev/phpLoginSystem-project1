<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet"  href="css/styles.css">
</head>
<body>
    
<?php 
    include_once 'header.php';
?>

<section>
    <div class="signupForm">
        <h2>SIGN UP</h2>
        <form class="signupForm__form" action="signup.inc.php" method="POST">
            <input  class="signupForm__input" type="text" name="name" placeholder="Full Name...">
            <input class="signupForm__input" type="text" name="email" placeholder="Email...">
            <input  class="signupForm__input" type="text" name="uid" placeholder="Username...">
            <input  class="signupForm__input" type="password" name="pwd" placeholder="Password...">
            <input  class="signupForm__input" type="password" name="pwdrepeat" placeholder="Repeat Password..."><br>
            <button class="signupForm__button" type="submit" name="submit">Sign Up</button>

        </form>
    </div>
</section>
<?php 
include_once 'footer.php';
?>
</body>
</html>
