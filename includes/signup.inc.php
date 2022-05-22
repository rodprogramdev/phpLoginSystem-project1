<?php
if(isset($_POST["submit"])){
    //If this is done inside of the code
    // echo "It works";
    $name = $_POST["name"]; // referencing hte signup.php input element with name attribute
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //add errors when user forget something into the input
    // functions that will return a true or false function
    if(emptyInputSignup() !== false){
        header("location: ../signup.php"); // going to redirect the user back to the signup page.
        exit();//going to stop the script from running;

    }


}
else{
    header("location: ../signup.php");
    exit();//going to stop the script from running;
}
