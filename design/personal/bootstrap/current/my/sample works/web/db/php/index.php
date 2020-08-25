 <!DOCTYPE html>
<html>

	<head>
		<title>Edit the list</title>
		<link rel="stylesheet" href="view/main.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
	</head>

	<body>

		<?php

			include("control/config.php");

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM `users` WHERE 1";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				echo "<table>";
					echo "<tr>";
						echo "<th>Delete</th>";
						echo "<th>Edit</th>";
						echo "<th>First Name</th>";
						echo "<th>Last Name</th>";
					echo "</tr>";
				
					while($row = $result->fetch_assoc()) {
						
							echo "<tr>";
								echo "<td><a style='text-decoration:none;color: black;' href='control/delete.php?id=".$row["id"]."'><button>Delete</button></a></td>";
								echo "<td>";
								echo "<button onclick='openEditForm(".$row['id'].")'>Edit</button>";
								echo "<form class= 'form' id=".$row["id"]." action='control/edit.php?id=".$row["id"]."' method='post'>";
								echo "<label>Name:</label><input type='text' name='firstName' size='8' value=".$row["firstName"]."><br>";
								echo "<label>Family:</label><input type='text' name='lastName' size='8' value=".$row["lastName"]."><br>";
								echo "<input type='submit' value='Submit'>";
								echo "<br>";
								echo "<button type='button' onclick='closeEditForm(".$row['id'].")'>Cancel</button>";
								echo "</form>";
								echo "</td>";
								echo "
									<script>
										function openEditForm(number) {
											//document.write(number);
											document.getElementById(number).style.display = 'block'; 
											
										}
										openEditForm (id);

										function closeEditForm(number) {
											//document.write(number);
											document.getElementById(number).style.display = 'none'; 
											
										}
										closeEditForm (id);
									</script>
								";
								echo "<td id='reload'> " . $row["firstName"]. " </td>";
								echo "<td id='reload'> " . $row["lastName"]. " </td>";
							echo "</tr>";

					
					}
				echo "</table>";

			}

			else {
				echo "0 results";
			}

			echo "<div class= 'addFrame'>";
			echo "<div class = 'btn'><button onclick='openAddForm()'>Add a new user</button></div>";
			echo "<form class= 'form' id='add' action='control/add.php' method='post'>";
			echo "<label>Name:</label><input type='text' name='firstName' size='8'><br>";
			echo "<label>Family:</label><input type='text' name='lastName' size='8'><br>";
			echo "<input type='submit' value='Submit'>";
			echo "<button type='button' onclick='closeAddForm()'>Cancel</button>";		
			echo "</form>";
			echo "</div>";

			echo "
				<script>
					function openAddForm() {
						document.getElementById('add').style.display = 'block'; 						
					}

					function closeAddForm() {
						document.getElementById('add').style.display = 'none'; 
					}
				</script>
			";


			$conn->close();

		?>
		






	</body>

</html>
