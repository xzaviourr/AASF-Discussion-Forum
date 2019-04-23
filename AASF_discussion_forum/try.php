<script type="text/javascript">
	{
		function change1()
		{
			document.getElementById('hello')="Hello world";
			document.getElementById("button").setAttribute("onclick","change2()");
		}
		function change2()
		{
			document.getElementById('hello')="wow";
			document.getElementById("button").setAttribute("onclick","change1()");	
		}
	}
</script>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="hello">
		HELLO
	</div>
	<button class="button" onclick="change1()">
		click
	</button>
</body>
</html>