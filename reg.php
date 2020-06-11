<?php
session_start();
header('location:quizcomp.php');
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
$mail=$_POST['mail'];
$dept=$_POST['dept'];
$sec=$_POST['sec'];


$q="select * from registration where name='$name'  && mailid='$mail' && department='$dept' && sec='$sec'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
	echo "Duplicate Data";
}
else
{
	$qy="insert into registration(name,mailid,department,sec) values ('$name','$mail','$dept','$sec')";
	mysqli_query($con,$qy);
}
?>