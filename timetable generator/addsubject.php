<!--Including dbinput.php-->
<?php include('dbinput.php') ?>

<html>
<head>
  <title>Add Subject</title>
    <link rel="stylesheet" type="text/css" href="stylem.css"><!--linking css file-->
</head>

<body>

<div>
<?php include 'menu.php';?><!--including menu-->
</div>

<form  method="post" action="addsubject.php" id="asForm">
	<center><h2>Add Subject</h2></center>

	<div class="input-group" >
		<label>Subject Name</label>
		<input type="text" name="subn" />
    </div>
	<div class="input-group" >
		<label>Subject Code</label>
		<input type="text" name="subc" />
    </div>
	<div class="select-group" >
		<label>Select Department</label>
		<select name="department">
			<option value="CSE" >CSE</option>
			<option value="EEE" >EEE</option>
			<option value="BBA" >BBA</option>
		</select>
	</div><br>
	
		<!--including error.php-->
    	<center><?php include('error.php'); ?></center>
	
	<button type="submit" class="btn"  name="as_Add">Add</button>
	<input type="button" class="btn" onclick="asReset()" value="Reset" />
</form>

<script>      <!--javascript-->
	function asReset(){
	document.getElementById("asForm").reset();
	}
</script>


</body>
</html>