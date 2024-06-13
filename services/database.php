<?php

$hostname = "localhost";
$username = "root";
$password = "";
$email = "";
$database_name = "data_ekasnack";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error){
    echo "<script>alert('Connection Failed')</script>";
    die("error!");
}

?>