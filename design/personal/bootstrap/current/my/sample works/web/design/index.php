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
			<li><a href="#Page">Page</a></li>
			<li><a href="#Shop">Shop</a></li>
			<li><a href="#Personal">Personal</a></li>
		</ul>

		<ul class=smallNavbar>
			<li style="float:left"><a class="home" href="../../">Back</a></li>
			<li style="float:left"><a class="home" href="../../../../">Home</a></li>
			<li><button type="button" id=dropbtn onclick="myFunction()"></button></li>
		</ul>

		<span id="dropMenu">
			<a href="#Personal">Personal</a>
			<a href="#Shop">Shop</a>
			<a href="#Shop">Page</a>

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


		<div id=Personal>
			<h1>Personal web site</h1>
			<h2>WordPress</h2>
			<h3>Twenty Seventeen</h3>
			<div><a class= "sample_links" href="http://bamshad-shm.com/my/sample%20works/web/wordpress/" target="_blank">1. Long front page.</a> The content is in one page.</div>
			<div><a class= "sample_links" href="http://bamshad-shm.com/my/sample%20works/web/design/wp/twSe/mltp/" target="_blank">2. Short front page.</a> The content is divided in different linked pages.</div>
			<h2>My Templates</h2>
			<div class= "sample_links"><a href="http://bamshad-shm.com" target="_blank">Short front page.</a> I used this design for my own personal web site. In the design, the content is divided in different linked pages.</div>
			<br>
			
		</div>

		<div id=Shop>
			<h1>Online shop</h1>
			<div><a class= "sample_links" href="http://bamshad-shm.com/my/sample%20works/web/openCart/upload/" target="_blank">OpenCart.</a></div>
		</div>

		<div id=Page>
			<h1>Page design</h1>
			<div><a class= "sample_links" href="page">Basic page.</a> Top menu and top button.</div>
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
