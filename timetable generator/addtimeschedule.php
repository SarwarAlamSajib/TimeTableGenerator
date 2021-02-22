<html>
<head>
  <title>Add Time Schedule</title>
    <link rel="stylesheet" type="text/css" href="stylem.css"><!--linking css file-->
</head>

<body>

	<div>
		<?php include 'menu.php';?><!--including menu-->
	</div>
	
	<form  method="post" action="addtimeschedule.php" id="atsForm">
	<center><h2>Add Time Schedule</h2></center>

	<div class="select-group" >
		<label>Select Subject</label>
		
		<?php
			$db = mysqli_connect('localhost', 'root', '', 'timetable');
			$query="SELECT subname FROM subject";
			$result = mysqli_query($db, $query);

			echo "<select name='selsub'>";
				while ($row=mysqli_fetch_array($result)){
					echo "<option value='" .$row['subname'] ."'>" .$row['subname'] ."</option>";}
			echo "</select>"
		?>
		
	</div>
	
	<div class="select-group" >
		<label>Select Teacher</label>
		
		<?php
			$db = mysqli_connect('localhost', 'root', '', 'timetable');
			$query="SELECT tname FROM teachers";
			$result = mysqli_query($db, $query);

			echo "<select name='seltech'>";
				while ($row=mysqli_fetch_array($result)){
					echo "<option value='" .$row['tname'] ."'>" .$row['tname'] ."</option>";}
			echo "</select>"
		?>
		
	</div>
	
	<div class="select-group" >
		<label>Select Class</label>
		
		<?php
			$db = mysqli_connect('localhost', 'root', '', 'timetable');
			$query="SELECT class FROM classnumber";
			$result = mysqli_query($db, $query);

			echo "<select name='selclass'>";
				while ($row=mysqli_fetch_array($result)){
					echo "<option value='" .$row['class'] ."'>" .$row['class'] ."</option>";}
			echo "</select>"
		?>
		
	</div>
	
	<div class="select-group" >
		<label>Select Hour</label>
		<select name="selhour">
			<option value="09:00 AM - 11:00 AM" >09:00 AM - 11:00 AM</option>
			<option value="11:00 AM - 01:00 PM" >11:00 AM - 01:00 PM</option>
			<option value="02:00 PM - 04:00 PM" >02:00 PM - 04:00 PM</option>
			<option value="04:00 PM - 06:00 PM" >04:00 PM - 06:00 PM</option>
		</select>
	</div>
	
	<div class="select-group" >
		<label>Select Day</label>
		<select name="selday">
			<option value="Monday" >Monday</option>
			<option value="Tuesday" >Tuesday</option>
			<option value="Wednesday" >Wednesday</option>
			<option value="Thursday" >Thursday</option>
			<option value="Friday" >Friday</option>
		</select>
	</div>

	
	<button type="submit" class="btn"  name="ats_Add">Add</button>
</form>

	<?php
	$subject="";
	$teacher="";
	$class="";
	$hour="";
	$day="";
	
	$db = mysqli_connect('localhost', 'root', '', 'timetable');

	if (isset($_POST['ats_Add'])) {
		
		$subject= mysqli_real_escape_string($db, $_POST['selsub']);
		$teacher= mysqli_real_escape_string($db, $_POST['seltech']);
	    $class= mysqli_real_escape_string($db, $_POST['selclass']);
	    $hour= mysqli_real_escape_string($db, $_POST['selhour']);
	    $day= mysqli_real_escape_string($db, $_POST['selday']);

		$query = "INSERT INTO timeschedule (subject,teacher,class,hour,day) 
					VALUES('$subject','$teacher','$class','$hour','$day')"; 
		mysqli_query($db, $query);
    
		echo '<script language="javascript">';
		echo 'alert("The schedule has been successfully added"); location.href="addtimeschedule.php"';
		echo '</script>'; 

	}
	?>
	
</body>
</html>

