<?php

$classnumber="";
$tid="";
$tname="";
$subname="";
$subcode="";
$department="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'timetable');

//input class number to database
if (isset($_POST['cn_Add'])) {
	
  // receive all input values from the form
  $classnumber= mysqli_real_escape_string($db, $_POST['classnumber']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($classnumber)) { array_push($errors, "Class number is required"); }

  // first check the database to make sure 
  $user_check_query = "SELECT * FROM classnumber WHERE class='$classnumber' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if class exists
    if ($user['class'] === $classnumber) {
      array_push($errors, "Class number already exists!!");}
	  }

  // Finally, input if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO classnumber (class) 
  			  VALUES('$classnumber')";
  	mysqli_query($db, $query);
    
	echo '<script language="javascript">';
    echo 'alert("The classroom has been successfully added"); location.href="addclassroom.php"';
    echo '</script>'; 
	}   
}


//input teacher details to database
if (isset($_POST['at_Add'])) {
	  $tid= mysqli_real_escape_string($db, $_POST['tid']);
	  $tname= mysqli_real_escape_string($db, $_POST['tname']);
	  
	  if (empty($tid)) { array_push($errors, "Teacher's id is required"); }
	  if (empty($tname)) { array_push($errors, "Teacher's name is required"); }

	  $user_check_query = "SELECT * FROM teachers WHERE tid='$tid' OR tname='$tname' LIMIT 1";
	  $result = mysqli_query($db, $user_check_query);
      $user = mysqli_fetch_assoc($result);
  
      if ($user) { // if user exists
		if ($user['tid'] === $tid) {
		array_push($errors, "Teacher's id already exists");}

	  if ($user['tname'] === $tname) {
		array_push($errors, "Teacher's name already exists"); }
	}

	 if (count($errors) == 0) {
			$query = "INSERT INTO teachers (tid,tname) 
					VALUES('$tid','$tname')";
		mysqli_query($db, $query);
    
		echo '<script language="javascript">';
		echo 'alert("The teacher has been successfully added"); location.href="addteacher.php"';
		echo '</script>'; 
	}  
}


//input teacher details to database
if (isset($_POST['as_Add'])) {
	  $subname= mysqli_real_escape_string($db, $_POST['subn']);
	  $subcode= mysqli_real_escape_string($db, $_POST['subc']);
	  $department= mysqli_real_escape_string($db, $_POST['department']);

	  
	  if (empty($subname)) { array_push($errors, "Subject name is required!!"); }
	  if (empty($subcode)) { array_push($errors, "Subject code is required!!"); }

	  $user_check_query = "SELECT * FROM subject WHERE subcode='$subcode' OR subname='$subname' OR department='$department' LIMIT 1";
	  $result = mysqli_query($db, $user_check_query);
      $user = mysqli_fetch_assoc($result);
  
      if ($user) { // if user exists
		if ($user['subname'] === $subname) {
		array_push($errors, "Subject name already exists");}

	  if ($user['subcode'] === $subcode) {
		array_push($errors, "Subject code already exists"); }
	}

	 if (count($errors) == 0) {
			$query = "INSERT INTO subject (subcode,subname,department) 
					VALUES('$subcode','$subname','$department')";
		mysqli_query($db, $query);
    
		echo '<script language="javascript">';
		echo 'alert("The subject has been successfully added"); location.href="addsubject.php"';
		echo '</script>'; 
	}  
}

?>