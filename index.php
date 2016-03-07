<!DOCTYPE html>
<Html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>index</title>
		<style type="text/css" media="screen">
		.hello {
			color: blue;
			font-size: 63px;
		}
		p:first-child {
		    display: none;
		}
		#hello3{
			color: red;
		}
		</style>
					
	</head>
<body>
	<p class="hello">Hello World</p>
	<p class="hello">Hello World 2</p>
	<p id="hello3">Hello World 3 </p>
</body>
<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
<script type="text/javascript">
//$("p:first").hide();
$('#hello3').click(function(){
  $('.hello:first').toggle();
  $('.hello:last').toggle();
  $("#p1").hover(function(){
          alert("You entered p1!");
      },
  
});
</script>
</html>