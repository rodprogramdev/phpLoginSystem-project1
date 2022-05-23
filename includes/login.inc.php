<?php 
if(isset($_POST["submit"])){ // check user if accessed the proper way
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    //reference to includes files
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($username,$pwd) !== false){
        header("location: ../login.php?error=emptyinput"); 
        exit();
    }

        loginUser($conn, $username, $pwd);

}
else{
    header("location: ../login.php");
    exit();
}

