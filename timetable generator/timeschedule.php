<html>
<head>
  <title>Time Schedule</title>
</head>

<body>
	<div>
		<?php include 'menu.php';?><!--including menu-->
	</div>
	
	<center><h2>Time Schedule</h2></center>
	
		<style>
			h2{
				background:	#142b47;
				width: 75%;
				height: 30px;
				color: white;
				border:3px solid cornflowerblue;
				border-radius:5px;
			}
			table{
				background:	#142b47;
				color: white;
				border:3px solid cornflowerblue;
				width: 76%;
				padding: 10px;
				margin: 40px 20px 20px 20px 20px;
				font-size:15px;
				border-radius:5px;
			}
			th{
				background: white;
				color: black;
				border:3px solid white;
				border-radius:5px;
			}
			td{
				border-radius:5px;
				border:2px solid cornflowerblue;
				padding: 5px;
			}
		</style>

		<?php
		$con=mysqli_connect('localhost', 'root', '', 'timetable');
		
			// Check connection
			if (mysqli_connect_errno()){	
				  echo "Failed to connect to MySQL: " . mysqli_connect_error();}

			$result = mysqli_query($con,"SELECT * FROM timeschedule");

			echo "<table align='center'>
				  <tr>
				  <th>id</th>
				  <th>Subject</th>
				  <th>Teacher</th>
				  <th>Class</th>
				  <th>Hour</th>
				  <th>Day</th>
				  </tr>";

			while($row = mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>" . $row['id'] . "</td>";
					echo "<td>" . $row['subject'] . "</td>";
					echo "<td>" . $row['teacher'] . "</td>";
					echo "<td>" . $row['class'] . "</td>";
					echo "<td>" . $row['hour'] . "</td>";
					echo "<td>" . $row['day'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
				
			mysqli_close($con);
		?>
		
		
</body>
</html>
