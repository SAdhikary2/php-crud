<?php


$server="localhost";
$username="root";
$password="";
$database="crudp";

#connecting to the server 

$con= new mysqli($server,$username,$password,$database);

if(!$con){
    die(mysqli_error($con));
}

?>