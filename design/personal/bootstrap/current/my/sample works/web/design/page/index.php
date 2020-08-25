<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" href="navbar.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>

		<ul class=bigNavbar>
			<li style="float:left"><a class="home" href="../">Back</a></li>
			<li style="float:left"><a class="home" href="../../../../../">Home</a></li>
			<li><a href="#otherSkills">Other Skills</a></li>
			<li><a href="#jobSkills">Job Skills</a></li>
			<li><a href="#languages">Lnguages</a></li>
		</ul>

		<ul class=smallNavbar>
			<li style="float:left"><a class="home" href="../">Back</a></li>
			<li style="float:left"><a class="home" href="../../../../../">Home</a></li>
			<li><button type="button" id=dropbtn onclick="myFunction()"></button></li>
		</ul>

		<span id="dropMenu">
			<a href="#languages">Lnguages</a>
			<br>
			<a href="#jobSkills">Job Skills</a>
			<br>
			<a href="#otherSkills">Other Skills</a>
		</span>

		<script>
			function myFunction() {
    				var x = document.getElementById("dropMenu");
    				if (x.style.display === "block") {
					x.style.display = "none";
				} 
				else {
					x.style.display = "block";
    				}
			}

			var size;
		</script>
		<script>
			$(document).ready(function(){
				size = window.innerWidth;
				if (size>768) {
					$("#dropMenu").hide();
					//$("#normal").show();
				} 
				//else {
					//$("#dropMenu").show();
					//$("#normal").hide();
				//}
			});
	
			$(window).resize(function(){
				size = window.innerWidth;
				if (size>768) {
					$("#dropMenu").hide();
					//$("#normal").show();
				} 
				//else {
					//$("#dropMenu").show();
					//$("#normal").hide();
				//}
			});
		</script>



		<div id=languages>
			<h1>Languages</h1>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
		</div>

		<div id=jobSkills>
			<h1>Job Skills</h1>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
		</div>

		<div id=otherSkills>
			<h1>Other Skills</h1>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
			<p>Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt Conetnt </p>
		</div>


		<button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>

		<script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					document.getElementById("topBtn").style.display = "block";
				} 
				else {
					document.getElementById("topBtn").style.display = "none";
				}
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
		</script>


	</body>

</html>
