<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 id="disp"></h1>
	<p id="prd"></p>

</body>
</html>

<?php
$txt="Shivansh";
echo "I love ".$txt."<br><br><br>";

$x = 5;
$y = 10;

function myTest() {
	global $x,$y;
    $y = $x + $y;
}

//myTest();
//echo $y; // outputs 15
echo "This ". "string ". "was ". "made ". "with multiple parameters.";

$x=5;
$y=10;
$z="hello guys!";
$x=$x+$y;
$y="hi";
echo $x . " ". $z. " ". $y. "<br>";
echo "<h1 style='font-size:60px;color:red;'>".$z."</h1>";
if($x==15)
	echo "<script>window.alert('Error');</script>";
for($i=1;$i<=10;$i++)
	echo "2 X ". $i. "=". 2*$i. "<br>";
$arr = array('abc','def' ,'dsd');
for($i=0;$i<count($arr);$i++)
	echo $arr[$i]."<br>";


?>

