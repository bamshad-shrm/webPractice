 <!DOCTYPE html>
<html>
	<head>
		<title>Work Experiences</title>
		<link rel="stylesheet" href="../../css/pages.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>

		<ul class=bigNavbar>
			<li style="float:left"><a class="home" href="../../">Home</a></li>
			<li><a href="#Other">Other</a></li>
			<li><a href="#Education">Education</a></li>
			<li><a href="#Job">Job</a></li>
		</ul>

		<ul class=smallNavbar>
			<li style="float:left"><a class="home" href="../../">Home</a></li>
			<li><button type="button" id=dropbtn onclick="myFunction()"></button></li>
		</ul>

		<span id="dropMenu">
			<a href="#Job">Job</a>
			<br>
			<a href="#Education">Education</a>
			<br>
			<a href="#Other">Other</a>
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

		<div id="Job">
			<h1>Job certificates</h1>
			<a class= "certificate_links" href="../../imgs/certificates/Pars Power Control.pdf" target="_blank">IT engineer in Pars Power Control, Tehran (Iran), April 2016 - August 2018</a> 
			<br>
			<br>
			<a class= "certificate_links" href="../../imgs/certificates/pegah e aftab.pdf" target="_blank">Programmer at Pegah E Aftab, Tehran (Iran), September 2007 - May 2010</a> 
		</div>

		<div id="Education">
			<h1>Academic certificates</h1>
			<div><a class= "certificate_links" href="../../imgs/certificates/master degree.pdf" target="_blank">Master of Science in Electrical Engineering with emphasis on Telecommunication Systems, Autumn 2011 - Spring 2015</a><div>
			<br>
			<div><a class= "certificate_links" href="../../imgs/certificates/master transcript.pdf" target="_blank">Transcript of Records (Master)</a></div>
			<br>
			<div><a class= "certificate_links" href="../../imgs/certificates/bachelor transcript.pdf" target="_blank">Transcript of Records (Bachelor)</a></div>
		</div>
		
		<div id="Other">
			<h1>Other certificates</h1>
			<div><a class= "certificate_links" href="../../imgs/certificates/intern.pdf" target="_blank">Internship, Web developer in Scanotag, January 2015 - March 2015</a></div>
			<br>
			<div><a class= "certificate_links" href="../../imgs/certificates/ecommerce.pdf" target="_blank">eCommerce for future, May 2014</a></div>
			<br>
			<div><a class= "certificate_links" href="../../imgs/certificates/matlab.pdf" target="_blank">IEEE MATLAB Workshop, April 2013</a></div>
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
		<img src="../../imgs/main/cnt bg.png" alt="cnt bg" width=100% height=100%>
		<div class= "contact_text">
			<p>bamshad.shm@gmail.com</p>
		</div>
	</div>

</body>
</html> 
