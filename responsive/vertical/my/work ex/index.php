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
			<li><a href="#Volunteer">Volunteer Experiences</a></li>
			<li><a href="#Internship">Internship</a></li>
			<li><a href="#Jobs">Jobs</a></li>
		</ul>

		<ul class=smallNavbar>
			<li style="float:left"><a class="home" href="../../">Home</a></li>
			<li><button type="button" id=dropbtn onclick="myFunction()"></button></li>
		</ul>

		<span id="dropMenu">
			<a href="#Jobs">Jobs</a>
			<br>
			<a href="#Internship">Internship</a>
			<br>
			<li><a href="#Volunteer">Volunteer Experiences</a></li>
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

		<div id="Jobs">
			<h1>Jobs</h1>
			<h3>IT engineer, April 2016 - August 2018</h3>
			<p>Company: Pars Power Control, Tehran (Iran)</p>
			<p>The Pars Power Control Co in cooperation with Ansaldo Energia is	responsible for operation & maintenance of three thermal power	plants in Iran. I used to work in their IT team. My responsibilities	were related to network security aspects. In practice, I worked on new confidentiality and authentication methods.</p>
			<h3>Research assistant, September 2015 - December 2015</h3>
			<p>Institute: BTH, Karlskrona (Sweden)</p>
			<p>BTH is an institute of technology with a focus on IT and sustainability. My research work was in the field of QoE in networking perspective. It was an hourly paid job. The research was in the field of QoE in networking perspective. My tasks were related to traffic shaping and analysis. Finally we could find a pattern between QoE and the network traffic.</b>
			<h3>My company, March 2015 - January 2016</h3>
			<p>Company Name: Virtual harbours, Karlskrona (Sweden)</p>
			<p>It was a sole trader IT consultant company. During
this period of time I worked on the following projects:</p>
			<p>1. QR code tracing system</p>
			<p>2. Network statistics indicator</p>
			<h3>Programmer, September 2007 - May 2010</h3>
			<p>Company: Pegah E Aftab, Tehran (Iran)</p>
			<p>Pegah-e Aftab is a knowledge technology company founded in 1999. It is focused on power industry and today it's ERP has covered more than 130 power plant business processes of the country. I used to work as programmer for them and gained a lot of skills during this period of time.</b>	
		</div>
		
		<div id="Internship">
			<h1>Internship</h1>
			<h3>Web developer, January 2015-March 2015</h3>
			<p>Company: Scanotag, Kalmar (Sweden)</p>
			<p>The company produces security tags and I worked for them as a web developer.</p>	
		</div>

		<div id="Volunteer">
			<h1>Volunteer Experiences</h1>
			<h3>eCommerce for future, Spring of 2014</h3>
			<p>Karlskrona, Sweden</p>
			<p>I have participated in this project as Photographer, Web developer & Coordinator.</p>
			<h3>IEEE BTH Student Branch, During my master program</h3>
			<p>Karlskrona, Sweden</p>	
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
