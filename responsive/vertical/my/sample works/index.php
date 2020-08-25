<!DOCTYPE html>
<html>

	<head>
		<title>Sample Works</title>
		<link rel="stylesheet" href="../../css/pages.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>

		<ul class=bigNavbar>
			<li style="float:left"><a class="home" href="../../">Home</a></li>
			<li><a href="#WebDevelpment">Web Develpment</a></li>
			<li><a href="#AppDevelopment">App Development</a></li>
		</ul>

		<ul class=smallNavbar>
			<li style="float:left"><a class="home" href="../../">Home</a></li>
			<li><button type="button" id=dropbtn onclick="myFunction()"></button></li>
		</ul>

		<span id="dropMenu">
			<a href="#AppDevelopment">App Development</a>
			<br>
			<a href="#WebDevelpment">Web Develpment</a>
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


		<div id=AppDevelopment>
			<h1>App Development</h1>
			<h3>Windows</h3>
			<h4>Cryptography package</h4>
			<p>This package includes 5 sample programs that are built to help the teaching of cryptography.</p> 

			<p>The first two programs are Encoder and Decoder. Encoder get the user input text and print it's ASCII code in binary format and the decoder take the code and transform it to our language.</p> 
			<p>Then, we have the pair of Encryptor and Decrypotr. The encryptor get the user plain text and shows the ASCII value (binary) and also the encrypted code. The encryption is very simple. indeed, it just changes all the zeros to one and the ones to zero. Clearly, the decryptor function revers to get the plain text.</p>
			<p>Finally, the hash program, uses the plain text as input and return the hash value in hexadecimal format. It uses MD5 algorithm.</p>
			<p>I personally believe these type of projects can help the teachers to motivate students. Moreover, it reduce the amount of text and number of slides :)</p>
			<div><a class= "sample_links" href="windows/Cryptography.zip" target="_blank">Download the cryptography package!</a></div>

		</div>

		<div id=WebDevelpment>
			<h1>Web Development</h1>
			<h4>Online store (OpenCart platform)</h4>
			<p>"Opencart is an easy to-use, powerful, Open Source online store management program". I beleive It has all the features for an online store.</p>
			<div><a class= "sample_links" href="http://bamshad-shm.com/my/sample%20works/web/openCart/upload/" target="_blank">Vist the online store</a></div>
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
