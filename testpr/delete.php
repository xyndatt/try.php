<?php
include("connect.php");

$sid = $_GET['id'];
$sql = "delete from students where id ='$sid'";

if ($conn->query($sql) === TRUE) {
    echo "deleted successfully";
    echo "<a href='regform.php'>Go BACK</a>";
}else{
    echo "not deleted" . $conn->error;
}
?>