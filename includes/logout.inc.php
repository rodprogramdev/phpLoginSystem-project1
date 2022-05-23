<?php 
    // destroy session variables
    session_start();
    session_unset();
    session_destroy();
    header("location: ../index.php"); // going to redirect the user back to the signup page.
        exit();//going to stop the script from running;