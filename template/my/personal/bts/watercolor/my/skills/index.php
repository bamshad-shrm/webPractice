<!DOCTYPE html>

<html>


	<head>
		<title>Skills</title>
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
						<a class="nav-link d-flex flex-column justify-content-center" href="#job"><img class="navImg mx-auto" src="../../myImgs/icon/jobSkills.png" alt="skills"><p class="mx-auto">Job skills</p></a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex flex-column justify-content-center" href="#languages"><img class="navImg mx-auto" src="../../myImgs/icon/languages.png" alt="languages"><p class="mx-auto">Languages</p></a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex flex-column justify-content-center" href="#other"><img class="navImg mx-auto" src="../../myImgs/icon/hobbies.png" alt="hobbies"><p class="mx-auto">Hobbies</p></a>
				</li>    
				</ul>
			</div>  
		</nav>

		<div class="container">
			<div class="row">

				<div class="col-lg-6">
					<h3 id="job" class="bg-dark text-white">Job-related skills:</h3>
					<b>Programming languages</b>
					<p>C, C++, C#, Perl, Python, HTML, CSS, PHP, JavaScript and SQL.</p>
					<hr>
					<b>Development platform</b>
					<p>GitHub.</p>
					<hr>
					<b>IDE</b>
					<p>Visual Studio (Windows).</p>
					<hr>
					<b>Concepts</b>
					<p>Agile development, MVC Architecture and OOP.</p>
					<hr>
					<b>Networking</b>
					<p>Network Management.</p>
					<p>Network Security.</p>
					<p>Network Virtualization: VMware.</p>
					<p>Socket Programming: C, C++, C# and Perl; in Linux and Windows.</p>
					<p>QoS and QoE.</p>
					<p>Traffic Shaping: NetEm in linux OS.</p>
					<p>Traffic Monitoring: Wireshark.</p>
					<p>Traffic analysis: Statistical analysis in MATLAB.</p>
					<hr>
					<b>App development</b>
					<p>Windows: C#.</p>
					<p>Linux: Python.</p>
					<hr>
					<b>Web development</b>
					<p>Web site and Web based application: HTML, CSS, JavaScript, PHP and SQL.</p>
				</div>

				<div class="col-lg-6">

					<h3 id="languages" class="bg-dark text-white">Languages:</h3>
					<p>Mother tongue: Persian</p>
					<table class="table table-dark table-hover">
						<thead>
							<tr>
								<th>Other languages</th>
								<th>Level</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>English</td>
								<td>EXCELLENT</td>
							</tr>
							<tr>
								<td>Swedish</td>
								<td>BEGINNER</td>
							</tr>
						</tbody>
					</table>

					<h3 id="other" class="bg-dark text-white">Hobbies:</h3>
					<b>Art</b>
					<p>Sculpting and painting.</p>
					<hr>
					<b>Sport</b>
					<p>Football and walking.</p>
					<hr>
					<b>Others</b>
					<p>Computer games, watching movies, listening to music and reading historical books.</p>				

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
