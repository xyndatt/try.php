<?php
include("connect.php");

$sid = $_POST["id"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "insert into students (id, email, password) VALUES ('$sid','$email','$password')";

if ($conn->query($sql)=== TRUE) {

    echo "data added successfully";
    echo "";
    echo '<a href="regform.php">Go Bakc</a>';
} else{
    echo "error" . $conn->error;
}
?>