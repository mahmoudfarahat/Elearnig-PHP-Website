<?php 

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

$server = "localhost";
$dbName = "elearn_system";
$dbUser = "root";
$dbPassword = "";


    $con =  mysqli_connect($server,$dbUser,$dbPassword,$dbName);

    if(!$con){

        die('Error:'.mysqli_connect_error());

    }

?>