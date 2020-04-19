<?php

$con = mysqli_connect('localhost','root','');

if(!$con)
{
  echo 'Not connected to server';
}

if (!mysqli_select_db($con,'women2'))
{
  echo 'Database not selected';
}
$name=$_POST["name"];
$email=$_POST["email"];
$problem=$_POST["problem"];


$sql = "INSERT INTO mem (name,email,problem)VALUES('$name','$email','$problem')";

if(!mysqli_query($con,$sql))
{
  echo'Not Inserted';
	echo("Error description: " . mysqli_error($con));
}
else
{
  echo'Inserted';
}

header("refresh:0; url= index.html");
?>