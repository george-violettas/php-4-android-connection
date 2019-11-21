<?php
include_once('conn.php');
// sql to delete a record
$sql = "DELETE FROM users WHERE name='Fahad'";

mysqli_query($conn,$sql);
$result = mysqli_affected_rows($conn);
if ($result ==-1){
	echo "Table not found...";
}
else if($result == 0){
	echo "Record not found (0 rows affected...)";
}
else if($result>0){
	echo $result." records deleted...";
}
//echo ". Affected rows: " . mysqli_affected_rows($conn);

?>