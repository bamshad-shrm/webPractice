 <!DOCTYPE html>
<html>
	<head>
		<title>Education</title>
		<link rel="stylesheet" href="../../css/pages.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>

		<ul class=bigNavbar>
			<li style="float:left"><a class="home" href="../../">Home</a></li>
			<li><a href="#Publication">Publication</a></li>
			<li><a href="#Bachelor">Bachelor</a></li>
			<li><a href="#Master">Master</a></li>
		</ul>

		<ul class=smallNavbar>
			<li style="float:left"><a class="home" href="../../">Home</a></li>
			<li><button type="button" id=dropbtn onclick="myFunction()"></button></li>
		</ul>

		<span id="dropMenu">
			<a href="#Master">Master</a>
			<br>
			<a href="#Bachelor">Bachelor</a>
			<br>
			<a href="#Publication">Publication</a>
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



		<div id="Master">
			<h1>Master</h1>
			<h4>Field of study: </h4>
                	<p>Master of Science in Electrical Engineering with emphasis on Telecommunication Systems (120 Credits), Autumn 2011– To Spring 2015.</p>
			<h4>University: </h4>
			<p>Blekinge Tekniska Högskola (BTH), Karlskrona, Sweden.</p>
			<h4>Main subjects: </h4>
			<p>TCP/IP, Computer Networking Software Tools, Software Development for Telecommunication Systems, Mobile Services, Applied Network Management, Network security, Simulation, Advanced Topic in Telecommunication Systems, Random process.</p>
			<h4>Thesis title: </h4>
			<p>Relationships between Quality of experience and TCP flag ratios for web services.</p>
			<h4>Thesis description: </h4>
			<p>Nowadays one of the most beneficial businesses in IT area is web services with huge amount of users. In this type of services evaluation of user satisfaction is one of the most essential tasks for web server administrations. To address this issue we proposed an indirect user happiness estimation method. The methodology used in the research is based on traffic analysis. The users are asked to
use and score the web-server while its QoS parameters decrease gradually. At the same time the traffic of the web-server is captured. By the study on traffic parameters and user satisfaction it has been observed that there is meaningful correlation between variations in ratio of TCP flags (FIN, SYN and ACK) and the user happiness.
			</p>
			<p>The Thesis is done under supervision of Professor Markus Fiedler.</p>
			<p>Final report of the thesis is available on:
<a href="http://www.diva-portal.org/smash/record.jsf?dswid=-9549&pid=diva2%3A826170&c=1&searchType=SIMPLE&language=en&query=bamshad&af=%5B%5D&aq=%5B%5B%5D%5D&aq2=%5B%5B%5D%5D&aqe=%5B%5D&noOfRows=50&sortOrder=author_sort_asc&sortOrder2=title_sort_asc&onlyFullText=false&sf=undergraduate" target="_blank">DiVA portal</a>.
			</p>
		
		</div>


		
		<div id="Bachelor">
			<h1>Bachelor</h1>
			<h4>Field of study: </h4>
                	<p>Electrical Engineering with emphasis on Control, Autumn 2005 - Spring 2009.</p>
			<h4>University: </h4>
			<p>Azad University, Iran.</p>
			<h4>Main subjects: </h4>
			<p>Linear control systems, Digital and nonlinear control systems, Digital signal processing, Telecommunications, Electric Circuits, Fuzzy Logics.</p>
			<h4>Thesis title: </h4>
			<p>A Controller for high temperature water level in the upper drum of boiler in gas power plant.</p>
			<h4>Thesis description: </h4>
			<p>In the upper drum of boiler the level of high temperature water is so essential. If it goes downer or upper than the standards, the boiler will be highly damaged. To solve this problem a controller based on Programmable Logic controller (PLC, S7 300) is provided as output of the thesis.</p>
		</div>

		<div id="Publication">
			<h1>Publication</h1>
			<h4>Title: </h4>
                	<p>Bridging between Quality of Experience and Quality of Service through TCP Flag Ratios.</p>
			<h4>Author(s): </h4>
			<p>Bamshad Shirmohamadi, Professor Markus Fiedler.</p>
			<h4>Published in:</h4>
			<p> 2016 IEEE 41st Conference on Local Computer Networks Workshops (LCN Workshops).</p>
			<h4>Available on:</h4>
			<a href="https://ieeexplore.ieee.org/document/7856156/" target="_blank">IEEE Xplore Digital Library</a>.</p>
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
