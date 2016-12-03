<?php 
	$pagetitle = "Welcome Page";
	require_once 'functions.php';



$index = loadView('index', array(), false);

loadView('master', array('content' => $index));


?>