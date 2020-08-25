<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" href="view/main.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
	</head>

	<body>

		<?php

			include 'config.php';			

			$q = intval($_GET);
			$con = mysqli_connect($servername, $username, $password, $dbname);
			if (!$con) {
				die('Could not connect: ' . mysqli_error($con));
			}

			mysqli_select_db($con,"php_test");
			$sql="SELECT * FROM `users` ";
			$result = mysqli_query($con,$sql);

			echo "<table>
			<tr>
			<th>First Name</th>
			<th>Last Name</th>
			</tr>";
			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row['firstName'] . "</td>";
				echo "<td>" . $row['lastName'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";

			mysqli_close($con);
		?>

	</body>

</html> 
