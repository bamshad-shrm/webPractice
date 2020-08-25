<!DOCTYPE html>

<html>


	<head>
		<title>Education</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../myCss/pages.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</head>


	<body>

		<nav class="navbar navbar-expand-sm navbar-light">
			<a class="navbar-brand d-flex flex-column justify-content-center" href="../../"><img class="navImg" src="../../myImgs/icon/home.png" alt="home"><p class = "mx-auto navItemText">Home</p></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"> </span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link d-flex flex-column justify-content-center" href="#master"><img class="navImg mx-auto" src="../../myImgs/icon/degree.png" alt="master"><p class="mx-auto">Master</p></a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex flex-column justify-content-center" href="#bachelor"><img class="navImg mx-auto" src="../../myImgs/icon/degree.png" alt="bachelor"><p class="mx-auto">Bachelor</p></a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex flex-column justify-content-center" href="#publication"><img class="navImg mx-auto" src="../../myImgs/icon/publication.png" alt="publication"><p class="mx-auto">Publication</p></a>
				</li>    
				</ul>
			</div>  
		</nav>

		<div class="container">
			<div class="row">

				<div class="col-lg-6">
					<h3 id="master" class="bg-dark text-white">Master:</h3>
					<b>Field of study: </b>
					<p>Master of Science in Electrical Engineering with emphasis on Telecommunication Systems (120 Credits), Autumn 2011– To Spring 2015.</p>
					<b>University: </b>
					<p>Blekinge Tekniska Högskola (BTH), Karlskrona, Sweden.</p>
					<b>Main subjects: </b>
					<p>TCP/IP, Computer Networking Software Tools, Software Development for Telecommunication Systems, Mobile Services, Applied Network Management, Network security, Simulation, Advanced Topic in Telecommunication Systems, Random process.</p>
					<b>Thesis title: </b>
					<p>Relationships between Quality of experience and TCP flag ratios for web services.</p>
					<b>Thesis description: </b>
					<p>Nowadays one of the most beneficial businesses in IT area is web services with huge amount of users. In this type of services evaluation of user satisfaction is one of the most essential tasks for web server administrations. To address this issue we proposed an indirect user happiness estimation method. The methodology used in the research is based on traffic analysis. The users are asked to
use and score the web-server while its QoS parameters decrease gradually. At the same time the traffic of the web-server is captured. By the study on traffic parameters and user satisfaction it has been observed that there is meaningful correlation between variations in ratio of TCP flags (FIN, SYN and ACK) and the user happiness.</p>
					<p>The Thesis is done under supervision of Professor Markus Fiedler.</p>
					<p>Final report of the thesis is available on:
					<a href="http://www.diva-portal.org/smash/record.jsf?dswid=-9549&pid=diva2%3A826170&c=1&searchType=SIMPLE&language=en&query=bamshad&af=%5B%5D&aq=%5B%5B%5D%5D&aq2=%5B%5B%5D%5D&aqe=%5B%5D&noOfRows=50&sortOrder=author_sort_asc&sortOrder2=title_sort_asc&onlyFullText=false&sf=undergraduate" target="_blank">DiVA portal</a>.
					</p>
				</div>

				<div class="col-lg-6">

					<h3 id="bachelor" class="bg-dark text-white">Bachelor:</h3>
					<b>Field of study: </b>
					<p>Electrical Engineering with emphasis on Control, Autumn 2005 - Spring 2009.</p>
					<b>University: </b>
					<p>Azad University, Iran.</p>
					<b>Main subjects: </b>
					<p>Linear control systems, Digital and nonlinear control systems, Digital signal processing, Telecommunications, Electric Circuits, Fuzzy Logics.</p>
					<b>Thesis title: </b>
					<p>A Controller for high temperature water level in the upper drum of boiler in gas power plant.</p>
					<b>Thesis description: </b>
					<p>In the upper drum of boiler the level of high temperature water is so essential. If it goes downer or upper than the standards, the boiler will be highly damaged. To solve this problem a controller based on Programmable Logic controller (PLC, S7 300) is provided as output of the thesis.</p>

					<h3 id="publication" class="bg-dark text-white">Publication:</h3>
					<b>Title: </b>
					<p>Bridging between Quality of Experience and Quality of Service through TCP Flag Ratios.</p>
					<b>Author(s): </b>
					<p>Bamshad Shirmohamadi, Professor Markus Fiedler.</p>
					<b>Published in:</b>
					<p> 2016 IEEE 41st Conference on Local Computer Networks Workshops (LCN Workshops).</p>
					<b>Available on:</b>
					<a href="https://ieeexplore.ieee.org/document/7856156/" target="_blank">IEEE Xplore Digital Library</a>.</p>			

				</div>

				<button onclick="topFunction()" id="topBtn" title="Go to top" class="float-right">Top</button>

			</div>
		</div>

		<div class="jumbotron bg-dark text-center" style="margin-bottom:0">
			<p>bamshad.shm@gmail.com</p>
		</div>

	</body>

	<!-- Top button script -->
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

</html>
