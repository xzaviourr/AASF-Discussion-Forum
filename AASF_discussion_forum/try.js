
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