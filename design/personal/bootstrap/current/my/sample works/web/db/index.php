<!DOCTYPE html>
<html>

	<head>
		<title>Sample Works</title>
		<link rel="stylesheet" href="../../../../myCss/pages.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>

		<ul class=bigNavbar>
			<li style="float:left"><a class="home" href="../../">Back</a></li>
			<li style="float:left"><a class="home" href="../../../../">Home</a></li>
			<li><a href="#Coding">Laravel</a></li>
			<li><a href="#Coding">AngularJS</a></li>
		</ul>

		<ul class=smallNavbar>
			<li style="float:left"><a class="home" href="../../">Back</a></li>
			<li style="float:left"><a class="home" href="../../../../">Home</a></li>
			<li><button type="button" id=dropbtn onclick="myFunction()"></button></li>
		</ul>

		<span id="dropMenu">
			<a href="#Coding">AngularJS</a>
			<a href="#Coding">Laravel</a>
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


		<div id=AngularJS>
			<h1>AngularJS</h1>
			<div><a class= "sample_links" href="http://bamshad-shm.com/my/sample%20works/web/db/AngularJS/" target="_blank">Edit list of customers.</a></div>
		</div>

		<div id=Laravel>
			<h1>Laravel</h1>
			<div><a class= "sample_links" href="http://bamshad-shm.com/laravelTest/db" target="_blank">Add a laravel tutorial link.</a></div>
		</div>


		</br>
		</br>
		</br>
		</br>
		</br>


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

	<div class= "contact_frame">
		<img src="../../../../myImgs/icon/cnt bg.png" alt="cnt bg" width=100% height=100%>
		<div class= "contact_text">
			<p>bamshad.shm@gmail.com</p>
		</div>
	</div>


	</body>

</html>
