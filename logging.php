<?php

error_reporting(0);

$mysqli = new mysqli('localhost','root','sqlattacks');

if($mysqli->connection_error){
    die('Connection Error');
}

$email = $_POST['email'];
$password = $_POST['password'];

