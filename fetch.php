<?php 
include_once('conn.php');

$result = mysqli_query($conn,"SELECT * FROM users");

while($row = mysqli_fetch_array($result)){
  echo $row['name'] . " " . $row['phone'];
  echo "<br />";
}

mysqli_close($conn);
?>

 