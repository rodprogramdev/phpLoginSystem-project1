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


}
else{
    header("location: ../signup.php");
}
