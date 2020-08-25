<!DOCTYPE html>

<html>


	<head>
		<title>Certificates</title>
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
						<a class="nav-link d-flex flex-column justify-content-center" href="#education"><img class="navImg mx-auto" src="../../myImgs/icon/degree.png" alt="education"><p class="mx-auto">Education</p></a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex flex-column justify-content-center" href="#others"><img class="navImg mx-auto" src="../../myImgs/icon/other.png" alt="others"><p class="mx-auto">Others</p></a>
				</li>    
				</ul>
			</div>  
		</nav>

		<div class="container">
			<div class="row">

				<div class="col-lg-12">

					<h3 id="job" class="bg-dark text-white">Job certificates:</h3>
					<br>
					<a class= "certificate_links" href="../../myImgs/certificates/Pars Power Control.pdf" target="_blank">IT engineer in Pars Power Control, Tehran (Iran), April 2016 - August 2018</a> 
					<br>
					<a class= "certificate_links" href="../../myImgs/certificates/pegah e aftab.pdf" target="_blank">Programmer at Pegah E Aftab, Tehran (Iran), September 2007 - May 2010</a>
					<br><br>

					<h3 id="education" class="bg-dark text-white">Academic certificates:</h3>
					<br>
					<a class= "certificate_links" href="../../myImgs/certificates/master degree.pdf" target="_blank">Master of Science in Electrical Engineering with emphasis on Telecommunication Systems, Autumn 2011 - Spring 2015</a>
					<br>
					<a class= "certificate_links" href="../../myImgs/certificates/master transcript.pdf" target="_blank">Transcript of Records (Master)</a>
					<br>
					<a class= "certificate_links" href="../../myImgs/certificates/bachelor transcript.pdf" target="_blank">Transcript of Records (Bachelor)</a>
					<br><br>

					<h3 id="others" class="bg-dark text-white">Other certificates:</h3>
					<br>
					<a class= "certificate_links" href="../../myImgs/certificates/intern.pdf" target="_blank">Internship, Web developer in Scanotag, January 2015 - March 2015</a>
					<br>
					<a class= "certificate_links" href="../../myImgs/certificates/ecommerce.pdf" target="_blank">eCommerce for future, May 2014</a>
					<br>
					<a class= "certificate_links" href="../../myImgs/certificates/matlab.pdf" target="_blank">IEEE MATLAB Workshop, April 2013</a>
					<br><br>
 
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
