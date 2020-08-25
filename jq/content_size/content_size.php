<!doctype html>
<html>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
 
	<span></span>
	<p id="mobile">mobile</p>
	<p id="normal">normal</p>

	<script>

		var size;

		$(document).ready(function(){
			size = window.innerWidth;
			if (size>480) {
				$("#mobile").hide();
				$("#normal").show();
			} 
			else {
				$("#mobile").show();
				$("#normal").hide();
			}
		});

		$(window).resize(function(){
			size = window.innerWidth;
			if (size>480) {
				$("#mobile").hide();
				$("#normal").show();
			} 
			else {
				$("#mobile").show();
				$("#normal").hide();
			}
		});

	</script>

</body>

</html>
