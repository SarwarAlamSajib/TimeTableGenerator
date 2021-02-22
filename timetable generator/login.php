<!--Including dbadminlogin.php-->
<?php include('dbadminlogin.php') ?>

<html>

<head>
  <title>Time Table Generator</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css"><!--linking css file-->
</head>

<body>
	 <h1>Time Table Generator</h1>
	 
    <form method="post" action="login.php"><!--login form-->
		 <h2 align="center" >Admin Login</h2>
		
		 
		<div class="input-group">
			<label>Admin Id</label>
			<input type="text" name="aid" >
		</div>
	
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		
			<!--including error.php-->
    	<center><?php include('error.php'); ?></center>
	
		<div class="input-group">
			<button type="submit" class="btn" name="login_admin">Login</button>
		</div>
	
  </form>
  
</body>

</html>