<?php
include_once('conn.php');

$field1_name=$_POST['field1-name'];
$field2_name=$_POST['field2-name'];
$field3_name=$_POST['field3-name'];

$query = "INSERT INTO sqli.users VALUES
('','$field1_name','$field2_name','$field3_name)";


if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " .$conn->error;
}
?>


