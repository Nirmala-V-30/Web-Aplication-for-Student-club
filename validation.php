<?php
session_start();
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
$pass=$_POST['pass'];


$q="select * from registration where name='$name' && password='$pass'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['username']=$name;
	header('location:next.php');
}
else
{
	header('location:login.php');
}
?>