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
    if(emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat) !== false){
        header("location: ../signup.php?error=emptyinput"); // going to redirect the user back to the signup page.
        exit();//going to stop the script from running;
    }

    if(invalidUid($username) !== false){
        header("location: ../signup.php?error=invaliduid"); // going to redirect the user back to the signup page.
        exit();//going to stop the script from running;
    }

    if(invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail"); // going to redirect the user back to the signup page.
        exit();//going to stop the script from running;
    }

    if(pwdMatch($pwd,$pwdRepeat) !== false){
        header("location: ../signup.php?error=passwordsdontmatch"); // going to redirect the user back to the signup page.
        exit();//going to stop the script from running;
    }

    if(uidExists($conn,$username, $email) !== false){
        header("location: ../signup.php?error=usernametaken"); // going to redirect the user back to the signup page.
        exit();//going to stop the script from running;
    }

    createUser($conn, $name, $email, $username, $pwd);



}
else{
    header("location: ../signup.php");
    exit();//going to stop the script from running;
}
