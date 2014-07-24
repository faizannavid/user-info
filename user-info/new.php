<?php
//session_start();$database = 'project';$table = 'member';

//$var=$_SESSION['id'];
$con = mysql_connect("localhost","root","","student");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
mysql_select_db("student", $con);
$v1=$_POST['name'];
$v2=$_POST['id'];
$v3=$_POST['pyear'];
$v4=$_POST['email'];
//if($v3!=$v4){
//header("location:sin_in.php");
//}else{

$qq="INSERT INTO `student`.`list` (`name`,`id`,`pyear`,`email`) values('$v1','$v2','$v3','$v4')";
mysql_query($qq);
//mysql_close();
//echo"<h3>Thank You.</h3> \n";
header("location:index.php");
//}
}
?>
