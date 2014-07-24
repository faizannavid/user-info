 <html>
 <head>
 <link href="css/style.css" rel="stylesheet" type="text/css" />
 </head>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$id=$_POST['id'];
$pyear=$_POST['pyear'];
$email=$_POST['email'];
$query3=mysql_query("update list set name='$name',id='$id',pyear='$pyear', email='$email' where id='$id'");
header('location:index.php');
/*
if($query3)
{
header('location:index.php');
} */
}
$query1=mysql_query("select * from list where id='$id'");
$query2=mysql_fetch_array($query1);
?>
<div class="center">
<form method="post" action="" >
<label>Name:</label><input type="text" name="name" value="<?php echo $query2['name']; ?>" /><br />
<label>Student ID:</label><input type="text" name="id" value="<?php echo $query2['id']; ?>" /><br/>
<label>Passing Year:</label><input type="text" name="pyear" value="<?php echo $query2['pyear']; ?>" /><br />
<label>Email:</label><input type="email" name="email" value="<?php echo $query2['email']; ?>" /><br/>
<br />
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
</body>
</html>