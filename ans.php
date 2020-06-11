<?php
session_start();
header('location:thank.php');
$con=mysqli_connect('localhost','id12675878_root','vnirmala30!','id12675878_cts');
if($con)
{
	echo "Connection established successfully";
}
else
{
	echo "No connection";
}
$name=$_POST['name'];
$a1=$_POST['a1'];
$a2=$_POST['a2'];
$a3=$_POST['a3'];
$a4=$_POST['a4'];
$a5=$_POST['a5'];
$a6=$_POST['a6'];
$a7=$_POST['a7'];
$a8=$_POST['a8'];
$a9=$_POST['a9'];
$a10=$_POST['a10'];

$qy="insert into register(name,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10) values ('$name','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10')";
mysqli_query($con,$qy);

?>