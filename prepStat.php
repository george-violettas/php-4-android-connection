<?php
include_once('conn.php');

// prepare and bind
$stmt = $conn->prepare("INSERT INTO sqli.users (name, phone, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss",$name, $phone, $email);

// set parameters and execute
$name = "Mike";
$phone="1233333";
$email = "john@example.com";
$stmt->execute();

$name = "Mohammed";
$phone="1233333";
$email = "moh@gggg.com";
$stmt->execute();

$name = "Abdulah";
$phone="55555555";
$email = "abu@abyt.com";
$stmt->execute();

echo "3 records created successfully";

$stmt->close();
$conn->close();