<?php
if(isset($_POST["submit"])){
    //If this is done inside of the code
    echo "It works";
}
else{
    header("location: ../signup.php");
}
