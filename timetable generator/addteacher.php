<!--Including dbinput.php-->
<?php include('dbinput.php') ?>

<html>
<head>
  <title>Add Teacher</title>
    <link rel="stylesheet" type="text/css" href="stylem.css"><!--linking css file-->
</head>

<body>

	<div>
		<?php include 'menu.php';?><!--including menu-->
	</div>

<form  method="post" action="addteacher.php" id="atForm">

	<center><h2>Add Teacher</h2></center>

	<div class="input-group" >
		<label>Teacher's Id</label>
		<input type="text" name="tid" /><br/>
	</div>

	<div class="input-group">
		<label>Teacher's Name</label>
		<input type="text" name="tname" /><br/>
	</div>

		<!--including error.php-->
    	<center><?php include('error.php'); ?></center>

	<button type="submit" class="btn"  name="at_Add">Add</button>
	<input type="button" class="btn" onclick="atReset()" value="Reset" />

</form>

<script>      <!--javascript-->
	function atReset(){ 
	document.getElementById("atForm").reset();
	}
</script>

</body>
</html>