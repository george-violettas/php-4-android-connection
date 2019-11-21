<?php
include_once('conn.php');
$sql = "INSERT INTO sqli.users (name, phone, email)
VALUES ('2344324', '12344444', 'mgm@mgm.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();	
?>