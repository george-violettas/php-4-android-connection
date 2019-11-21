<?php 
include_once('conn.php');

$data = array();
$query = mysqli_query($conn,"SELECT * FROM users");

while ($row = mysqli_fetch_row($query)) {
	$data[] = $row;
}
echo json_encode($data);

mysqli_close($conn);
?>
