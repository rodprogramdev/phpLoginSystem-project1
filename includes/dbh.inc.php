<?php 

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "scdtpPhpsite";//database name in the phpmyadmin

$conn = mysqli_connect($serverName, $dBUsername,$dBPassword,$dBName);

if(!$conn){
    //code
    die("Connection failed: " . mysqli_connect_error());
}