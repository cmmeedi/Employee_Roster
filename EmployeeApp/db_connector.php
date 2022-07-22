<?php 

//These are the variables that hold the specific db data i want to connect to
$host = "localhost";
$username = "root";
$user_pass = "root";
$database = "employees";

//Then a variable is created with that data
$conn = new mysqli($host, $username, $user_pass, $database);

?>