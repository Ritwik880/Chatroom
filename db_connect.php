<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "chatroom";

// Connecting to the database

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if(!$conn)
{
    die("Failed to connect". mysqli_connect_error());
}
?>
