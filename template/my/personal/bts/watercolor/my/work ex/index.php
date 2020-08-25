<!DOCTYPE html>

<html>


	<head>
		<title>Work Ex</title>
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
						<a class="nav-link d-flex flex-column justify-content-center" href="#job"><img class="navImg mx-auto" src="../../myImgs/icon/jobEx.png" alt="skills"><p class="mx-auto">Jobs</p></a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex flex-column justify-content-center" href="#internship"><img class="navImg mx-auto" src="../../myImgs/icon/internship.png" alt="internship"><p class="mx-auto">Internship</p></a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex flex-column justify-content-center" href="#others"><img class="navImg mx-auto" src="../../myImgs/icon/other.png" alt="others"><p class="mx-auto">Others</p></a>
				</li>    
				</ul>
			</div>  
		</nav>

		<div class="container">
			<div class="row">

				<div class="col-lg-6">
					<h3 id="job" class="bg-dark text-white">Jobs:</h3>
					<b>IT engineer, April 2016 - August 2018</b>
					<p>Company: Pars Power Control, Tehran (Iran)</p>
					<p>The Pars Power Control Co in cooperation with Ansaldo Energia is	responsible for operation & maintenance of three thermal power	plants in Iran. I used to work in their IT team. My responsibilities	were related to network security aspects. In practice, I worked on new confidentiality and authentication methods.</p>
					<b>Research assistant, September 2015 - December 2015</b>
					<p>Institute: BTH, Karlskrona (Sweden)</p>
					<p>BTH is an institute of technology with a focus on IT and sustainability. My research work was in the field of QoE in networking perspective. It was an hourly paid job. The research was in the field of QoE in networking perspective. My tasks were related to traffic shaping and analysis. Finally we could find a pattern between QoE and the network traffic.</p>
					<b>My company, March 2015 - January 2016</b>
					<p>Company Name: Virtual harbours, Karlskrona (Sweden)</p>
					<p>It was a sole trader IT consultant company. During
this period of time I worked on the following projects:</p>
					<ul>
					<li>1. QR code tracing system</li>
					<li>2. Network statistics indicator</li>
					</ul>
					<b>Programmer, September 2007 - May 2010</b>
					<p>Company: Pegah E Aftab, Tehran (Iran)</p>
					<p>Pegah-e Aftab is a knowledge technology company founded in 1999. It is focused on power industry and today it's ERP has covered more than 130 power plant business processes of the country. I used to work as programmer for them and gained a lot of skills during this period of time.</b>
				</div>

				<div class="col-lg-6">

					<h3 id="internship" class="bg-dark text-white">Internship:</h3>
					<b>Web developer, January 2015-March 2015</b>
					<p>Company: Scanotag, Kalmar (Sweden)</p>
					<p>The company produces security tags and I worked for them as a web developer.</p>	

					<h3 id="others" class="bg-dark text-white">Others:</h3>
					<b>eCommerce for future, Spring of 2014</b>
					<p>Karlskrona, Sweden</p>
					<p>I have participated in this project as Photographer, Web developer & Coordinator.</p>
					<b>IEEE BTH Student Branch, During my master program</b>
					<p>Karlskrona, Sweden</p>	
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
