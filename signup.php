<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet"  href="css/styles.css">
</head>
<body> -->
    
<?php 
    include_once 'header.php';
?>

<section>
    <div class="signupForm">
        <h2 class="signupForm__h2">SIGN UP</h2>
        <form class="signupForm__form" action="includes/signup.inc.php" method="POST">
            <input  class="signupForm__input" type="text" name="name" placeholder="Full Name..." autocomplete="off">
            <input class="signupForm__input" type="text" name="email" placeholder="Email..." autocomplete="off">
            <input  class="signupForm__input" type="text" name="uid" placeholder="Username..." autocomplete="off">
            <input  class="signupForm__input" type="password" name="pwd" placeholder="Password..." autocomplete="off">
            <input  class="signupForm__input" type="password" name="pwdrepeat" placeholder="Repeat Password..." autocomplete="off"><br>
            <button class="signupForm__button btn btn-primary" type="submit" name="submit">Sign Up</button>

        </form>
    </div>
    
<?php
    if(isset($_GET["error"])){ // check if a certain url is present 
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields!</p>";
        }
        else if($_GET["error"] == "invaliduid"){
            echo "<p>Choose a proper username</p>";
        }
        else if($_GET["error"] == "invalidemail"){
            echo "<p>Choose a proper email!</p>";
        }
        else if($_GET["error"] == "passwordsdontmatch"){
            echo "<p>Passwords doensn't match username</p>";
        }
        else if($_GET["error"] == "stmtfailed"){
            echo "<p>Something went wrong, try again!</p>";
        }
        else if($_GET["error"] == "usernametaken"){
            echo "<p>Username already taken!</p>";
        }
        else if($_GET["error"] == "none"){
            echo "<p>You have signed up!</p>";
        }
    }
?>
</section>


<?php 
include_once 'footer.php';
?>
<!-- </body>
</html> -->
