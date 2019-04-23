<?php 
function fun()
{
	STATIC $i=1;
	$i++;
	echo $i;
}

fun();

 ?>