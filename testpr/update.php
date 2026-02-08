<?php
include "connect.php";

$sid = $_POST["id"];
$newpw = $_POST["newpw"];

$sql = "UPDATE students set password ='$newpw' where id ='$sid'";

if ($conn->query($sql) === TRUE) {
    echo "updated succcessfully";
    echo "<a href='regform.php'>GO BACK</a>";
}else{
    echo "failed: " . $conn->error;
}
?>