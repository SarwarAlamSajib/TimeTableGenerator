<?php

// initializing variables
$errors=array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'timetable');

// login admin
if (isset($_POST['login_admin'])) {
  $id = mysqli_real_escape_string($db, $_POST['aid']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($id)) {
  	array_push($errors, "Admin Id is required!!");}
  if (empty($password)) {
  	array_push($errors, "Password is required!!");}

  if (count($errors) == 0) {
  	//$password = md5($password);
  	$query = "SELECT * FROM admin WHERE aid='$id' AND password='$password'";
  	$results = mysqli_query($db, $query);
	
  	if (mysqli_num_rows($results) == 1) {
  	  header('location: addsubject.php');
  	}else {
  		array_push($errors, "Wrong ID/password combination");
		//echo $id ,$password;
  	}
  }
}

?>