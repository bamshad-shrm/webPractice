<!DOCTYPE html>

<html>

	<body>
	
		<?php
			function runMyFunction() {
				echo 'I just ran a php function';
			}

			if (isset($_GET['hello'])) {
				runMyFunction();
			}
		?>

		<a href='index.php?hello=true'><button>Run PHP Function</button></a>

	</body>

</html>
