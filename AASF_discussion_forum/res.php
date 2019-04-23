<?php
$conn=mysqli_connect("localhost","root","");
if(!$conn)
	echo "<script>window.alert('connection faliled');</script>";
mysqli_connect_error();

$sql="CREATE DATABASE mydb";
if(!mysqli_connect("localhost","root","","mydb"))
	if(!mysqli_query($conn,$sql))
		echo "<script>window.alert('database creation failed');</script>";

	echo "done";
	$sql="CREATE TABLE users(
		ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username varchar(10),
        password varchar(10),
        phone varchar(10),
        name varchar(30)
	)";

	if($conn)
	$conn=mysqli_connect("localhost","root","","mydb");
	mysqli_query($conn,$sql);
	function err($n)
	{
		$n=trim($n);
		$n=stripslashes($n);
		$n=htmlspecialchars($n);
		return $n;
	}
 
 if (isset($_POST["submit"]))
 {
 	$name=err($_POST['name']);
 	$pass=err($_POST['pass1']);
 	$pass1=err($_POST['pass2']);
 	$usr=err($_POST['usr']);
 	$contact=err($_POST['contact']);
 	if($pass!=$pass1)
 		echo "<script>window.alert('check password');</script>";
 	else
 	{
 		$sql="INSERT INTO users(name,username,password,phone) VALUES('$name', '$usr', '$pass', '$contact')";
 		if(!mysqli_query($conn,$sql))
 			echo"<script>window.alert('insertion failed');</script>";
 		else
 			echo"<script>window.alert('insertion success');</script>";

 	}

 }
	?>
