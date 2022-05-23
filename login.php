<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet"  href="styles.css">
</head>
<body> -->

<?php 
    include_once 'header.php';
?>

<section>
    <div class="loginForm">
        <h2>LOG IN</h2>
        <form class="loginForm__form" action="includes/login.inc.php" method="POST">
            <input class="loginForm__input" type="text" name="uid" placeholder="Username/Email">
            <input class="loginForm__input" type="password" name="pwd" placeholder="Password">
            <button class="loginForm__button" type="submit" name="submit">Log In</button>

        </form>
    </div>
      
<?php
    if(isset($_GET["error"])){ // check if a certain url is present 
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields!</p>";
        }
        else if($_GET["error"] == "wronglogin"){
            echo "<p>Incorrect login information!</p>";
        }
    }
?>
</section>


<?php 
include_once 'footer.php';
?>

</body>
</html>
