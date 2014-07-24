<html>
<head>
<Title>This is a static page</Title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
/*
// Create connection
$con=mysqli_connect("localhost","root","","student");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 

*/
//require'libs/mysqli.class.php';

//	$conn = mysql_connect("localhost","root","");
	//$db      = mysql_select_db("student",$conn);
include('config.php');
?> 
<div class="vid">
<form action="new.php" method="POST" >

	<label>Name: </label><input type="text" name="name" autofocus/><br />
	<label>*Student-ID: </label><input type="number" name="id"/><br />
	<label>Passing Year: </label><input type="number" name="pyear"/><br />
	<label>E-Mail: </label><input type="email" name="email"/><br />
	<br/>
	<b>*</b>Required</br>
	
	<!--label>Field</label><textarea></textarea--><br />
	<input type="submit" name="submit" value="DONE" />
					<input type="Reset"/>
</form>
</div>
<br/>
	<div class="conv">
	<table width="450" border="2" cellspacing="0" cellpadding='1'>
	
 <?php
	echo "<th>Student Name</th> <th>Student ID</th><th> Passing Year</th><th>Email</th><th>Edit</th><th>Delete</th>";
	 $sql= "SELECT * FROM list ORDER BY name";
	 
	 $qury= mysql_query($sql);
 
	while($row = mysql_fetch_array($qury)){
		?>
		
	<tr><td><center><?php echo $row['name']; ?><center></td>
		<td><center><?php echo $row['id']; ?><center></td>
		<td><center><?php echo $row["pyear"]; ?></center></td>
		<td><center><?php echo $row["email"]; ?></center></td>
		<td><center><?php echo "<a href='edit.php?id=".$row['id']."'>Edit</a>";?></center></td>
		<td><center><?php echo "<a href='delete.php?id=".$row['id']."'>Delete</a>";?></center></td>
	
		</tr>
		
 	<?php
	}
	?>
	
	</table>
	</div>
<?php 
$con=mysqli_connect("localhost","root","","student");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//echo "connected"; 
//*/
mysqli_close($con);
?> 
<br/>


</body>