<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet"> 
   <link rel="stylesheet"  href="css/styles.css">
</head>
<body>
  
    <div class="navigation">
      <nav class="navbar navbar-expand-lg bg-dark">
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php
                if(isset($_SESSION["useruid"])){ // show something depending if the user is login or not
                    echo "<li><a href='profile.php'>Profile page</a></li>";
                    echo "<li><a href='courses.php'>Video Courses</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                }
                else{
                    echo " <li><a href='signup.php'>Sign up</a></li>";
                    echo " <li><a href='login.php'>Log in</a></li>";
                }
            ?>
            <!-- <li><a href="signup.php">SIGN UP</a></li>
            <li><a href="login.php">LOG IN</a></li> -->
        </ul>
      </nav> 
    </div>
    
            
