<?php
	$pagetitle = "Add Form";
	require_once 'functions.php';
	$data = array();

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name = $_POST['name'];
		$email =  $_POST['email'];
		
		$error = '';
		if(empty($name)) {
			$error .= "Name is required<br />";
		}else{
			$name = sanity($name);
		}
		if (empty($email)) {
			$error .= "Email is required";
		} else {
			$email = sanity($email);
		// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  $error = "Invalid email format"; 
			}
		}


		if(!$error) {
			addContact($name, $email);
			$error = "Conatct Saved Successfully";
			//header("Location:index.php");
			//exit;
			$data['error'] = $error;

		} else {
			$data['error'] = $error;
		}
	}


$index = loadView('add-form', $data, false);
loadView('master', array('content' => $index));
?>