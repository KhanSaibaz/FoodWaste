<?php

$servername= 'root';
$username='localhost';
$password=''
$database='meal-connect'
$connection=mysqli_connect($servername,$username,$password,$database)
if(!$connection){
    die(mysqli_connect_error())
}


?>
