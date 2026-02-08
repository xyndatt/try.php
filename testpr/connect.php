<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testpr";

$conn = new mysqli($servername,$username,$password,$database);
if ($conn->connect_error){
    die("not connected: " . $conn->connect_error);
}
?>