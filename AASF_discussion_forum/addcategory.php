<?php 

include ('dbconn.php');
$category_title=$POST_['category_title'];
$insert=mysqli_query($con, "INSERT INTO categories (`category_title`) 
								  VALUES ('".$category_title."');");
								  
	if ($insert)
	{
		header("Location: topics.php?cid=".$cid."&scid=".$scid."");
	}


 ?>