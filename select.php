<?php
include_once('conn.php');

$sql = "SELECT id, name, phone, email FROM sqli.users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. ", phone:" . $row["phone"].", e-mail:".$row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 