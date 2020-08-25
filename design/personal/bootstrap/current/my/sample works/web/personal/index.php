<!DOCTYPE html>
<html>

	<head>
		<title>Perssonal websites</title>
		<link rel="stylesheet" href="../../../../myCss/pages.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>

		<ul class=bigNavbar>
			<li style="float:left"><a class="home" href="../../">Back</a></li>
			<li style="float:left"><a class="home" href="../../../../">Home</a></li>
			<li><a href="#my">My style</a></li>
			<li><a href="#wp">WordPress</a></li>
		</ul>

		<ul class=smallNavbar>
			<li style="float:left"><a class="home" href="../../">Back</a></li>
			<li style="float:left"><a class="home" href="../../../../">Home</a></li>
			<li><button type="button" id=dropbtn onclick="myFunction()"></button></li>
		</ul>

		<span id="dropMenu">
			<a href="#wp">WordPress</a>
			<a href="#my">My style</a>
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


		<div id=wp>
			<h1>WordPress</h1>
			<h2>CV, style: Twenty Seventeen</h2>
			<div><a class= "sample_links" href="http://bamshad-shm.com/my/sample%20works/web/wps/wpsA" target="_blank">1. Short front page.</a></div>
			<div><a class= "sample_links" href="http://bamshad-shm.com/my/sample%20works/web/wps/wpsB" target="_blank">2. Long front page.</a></div>
			<h2>Blog, styles: Twenty Fifteen and Twenty Sixteen</h2>
			<div><a class= "sample_links" href="http://bamshad-shm.com/my/sample%20works/web/wps/wpsC" target="_blank">3. Left side menu.</a></div>
			<div><a class= "sample_links" href="http://bamshad-shm.com/my/sample%20works/web/wps/wpsD" target="_blank">4. Right side menu.</a></div>
			<h2>CV + Blog, style: Twenty Seventeen</h2>
			<div><a class= "sample_links" href="http://bamshad-shm.com/my/sample%20works/web/wps/wpsE" target="_blank">5. Short front page.</a> In the first page includes posts.</div>

		<div id=my>
			<h1>My style</h1>
			<div class= "sample_links"><a href="http://bamshad-shm.com" target="_blank">6. Short front page.</a> I used this design for my own personal web site. In the design, the content is divided in different linked pages.</div>
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
