<script>
   function myFunction(){
       var a= confirm("do you want to delete ");
	   var txt;
	   if (a==true){
		 txt="ok";
	   }
	   else {	   
		  txt="no";      
	   }
	   document.getElementById("demo").innerHTML = txt; 
   }

</script>

<body>
	<form action="" method="post">
	<br/><br/>
		DELETE by name : <input type="text" name="field1-name"><br>
		<br/>
		<br/>
		<br/>
	
		<button onclick="myFunction()">Try it</button>
		<a href="<?php $_SERVER['PHP_SELF']; ?>">Recargar</a>

	</form>
	<table border="1">
	<tr>
	<th>NAME</th>
	<th>PHONE</th>
	<th>EMAIL</th>
	</tr>
	<?php
include_once('conn.php');
$field1_name=$_POST['field1-name'];

if ($field1_name==null){	
}

$a=  "<p id='demo'></p>";
echo $a;
if ($a=="ok"){
	$query = "DELETE FROM sqli.user WHERE name like '$field1_name'";
	$rss = mysqli_query($conn,$query);
}
else{
}
$q ="select * FROM sqli.user ";	
$rs = mysqli_query($conn,$q);
while ($rows=mysqli_fetch_array($rs)){
	echo   "<tr>";
	echo   "<td>";
	echo  $rows['name'];
	echo   "</td>";
	echo   "<td>";
	echo  $rows['phone'];
	echo   "</td>";
	echo   "<td>";
	echo $rows['email'];
	echo   "</td>";
	echo   "</tr>";
}

?>
</table>