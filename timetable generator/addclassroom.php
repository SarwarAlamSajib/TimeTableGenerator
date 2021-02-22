<!--Including dbinput.php-->
<?php include('dbinput.php') ?>

<html>
<head>
  <title>Add Classroom</title>
    <link rel="stylesheet" type="text/css" href="stylem.css"><!--linking css file-->
</head>

<body>

<div>
<?php include 'menu.php';?><!--including menu-->
</div>

<form method="post" action="addclassroom.php" id="cnForm">
	
	<center><h2>Add Classroom</h2></center>
	
	<div class="input-group" >
		<label>Class Number</label>
		<input type="text" name="classnumber" />
    </div>
	
		<!--including error.php-->
    	<center><?php include('error.php'); ?></center>
	
	<button type="submit" class="btn"  name="cn_Add">Add</button>
	<input type="button" class="btn" onclick="cnReset()" value="Reset" />

</form>

<script>      <!--javascript-->
	function cnReset(){
	document.getElementById("cnForm").reset();
	}
	
	//function cnAdd() {
   // alert("The class room has been added successfully");
    //}
</script>


</body>
</html>