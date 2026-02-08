<?php

include("connect.php");

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th><th>USERNAME</th><th>PASSWORD</th><th>ACTION</th></tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>";
        echo $row['id'];
        echo "</td>";
        echo "<td>";
        echo $row['email'];
        echo "</td>";
        echo "<td>";
        echo $row['password'];
        echo "</td>";
        echo "<td>";
        echo "<a href='delete.php?id=" . $row['id'] . "'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "0 result";
}

echo "</table>";
?>
