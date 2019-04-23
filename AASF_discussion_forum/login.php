<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
// if(isset($POST["subm
//button click
{
	if(isset($_POST["username"])&&isset($_POST["password"]))
	{
		$name=$_POST["username"];
		$password=$_POST["password"];


		echo "name is".$name."password is".$password;

	}
}
?>