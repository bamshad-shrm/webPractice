 <!DOCTYPE html>
<html>
<head>
	<head>
		<title>Skills</title>
		<link rel="stylesheet" href="../../myCss/pages.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>

		<ul class=bigNavbar>
			<li style="float:left"><a class="home" href="../../">Home</a></li>
			<li><a href="#Other-skills-and-hobbies">Other skills and hobbies</a></li>
			<li><a href="#Job-related-skills">Job-related skills</a></li>
			<li><a href="#Languages">Languages</a></li>
		</ul>

		<ul class=smallNavbar>
			<li style="float:left"><a class="home" href="../../">Home</a></li>
			<li><button type="button" id=dropbtn onclick="myFunction()"></button></li>
		</ul>

		<span id="dropMenu">
			<a href="#Languages">Languages</a>
			<br>
			<a href="#Job-related-skills">Job-related skills</a>
			<br>
			<a href="#Other-skills-and-hobbies">Other skills and hobbies</a>
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

		<div id="Languages">
			<h1>Languages:</h1>
			<b>Mother tongue:</b> <strong>Persian</strong>
			</br>
			</br>

			<table id="normal_languages_table">
				<tr>
					<th>Other languages</th>
					<th>UNDERSTANDING</th>
					<th>SPEAKING</th>
					<th>WRITING</th>
				</tr>
  				<tr>
    					<td>English</td>
					<td>EXCELLENT</td>
    					<td>EXCELLENT</td>
    					<td>EXCELLENT</td>
  				</tr>
  				<tr>
    					<td>Swedish</td>
					<td>BEGINNER</td>
    					<td>BEGINNER</td>
    					<td>BEGINNER</td>
  				</tr>

			</table>

			<table id="mobile_languages_table">
				<tr>
					<th>Other languages</th>
					<th>LEVEL</th>
				</tr>
  				<tr>
    					<td>English</td>
					<td>EXCELLENT</td>
  				</tr>
  				<tr>
    					<td>Swedish</td>
					<td>BEGINNER</td>
  				</tr>

			</table>

		</div> 

		<div id="Job-related-skills">
			<h1>Job-related skills:</h1>
			<h3>Networking</h3>
			<p>Network Management.</p>
			<p>Network Security.</p>
			<p>Network Virtualization: VMware.</p>
			<p>Socket Programming: C, C++, C# and Perl; in Linux and Windows.</p>
			<p>QoS and QoE.</p>
			<p>Traffic Shaping: NetEm in linux OS.</p>
			<p>Traffic Monitoring: Wireshark.</p>
			<p>Traffic analysis: Statistical analysis in MATLAB.</p>
			<hr>
			<h3>App development</h3>
			<p>Windows: C#.</p>
			<p>Linux: Python.</p>
			<hr>
			<h3>Web development</h3>
			<p>Web site and Web based application: HTML, CSS, JavaScript, PHP and SQL.</p>
			<hr>
			<h3>Programming languages</h3>
			<p>C, C++, C#, Perl, Python, PHP, HTML, CSS, JavaScript, SQL and XML.</p>
			<hr>
			<h3>Development platform</h3>
			<p>GitHub.</p>
			<hr>
			<h3>IDE</h3>
			<p>Visual Studio and Eclipse.</p>
			<hr>
			<h3>Concepts</h3>
			<p>Agile development, MVC Architecture and OOP.</p>
		</div>
		
		<div id="Other-skills-and-hobbies">
			<h1>Other skills and hobbies:</h1>
			<h3>Social skills and competences</h3>
			<p>Good ability to adapt to multicultural environments, Process Initiator, Team Spirit and Hard worker.</p>
			<hr>
			<h3>Art</h3>
			<p>Sculpting and painting.</p>
			<hr>
			<h3>Sport</h3>
			<p>Football and walking.</p>
			<hr>
			<h3>Hobbies</h3>
			<p>Computer games, watching movies, listening to music and Reading historical books.</p>
		</div>

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
		<img src="../../myImgs/icon/cnt bg.png" alt="cnt bg" width=100% height=100%>
		<div class= "contact_text">
			<p>bamshad.shm@gmail.com</p>
		</div>
	</div>

		<script>

			var size;

			$(document).ready(function(){
				size = window.innerWidth;
				if (size>480) {
					$("#mobile_languages_table").hide();
					$("#normal_languages_table").show();
				} 
				else {
					$("#mobile_languages_table").show();
					$("#normal_languages_table").hide();
				}
			});

			$(window).resize(function(){
				size = window.innerWidth;
				if (size>480) {
					$("#mobile_languages_table").hide();
					$("#normal_languages_table").show();
				} 
				else {
					$("#mobile_languages_table").show();
					$("#normal_languages_table").hide();
				}
			});

		</script>

	</body>
</html> 
