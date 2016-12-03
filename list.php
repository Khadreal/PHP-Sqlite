<?php 
	$pagetitle = "Display Contact Details";
	require_once 'functions.php';
	$total = paginate();

	//$content = loadView('list-contact', array(), false);

	//loadView('master', array('content' => $content));

	if(isset($_GET['id'])){
	    $id=$_GET['id'];
	    $start=($id-1)*$limit;
	}else{
	    $id=1;
	}
	
	$content = loadView('list-contact', array('contact' => fetchInfo()), false);

	loadView('master', compact('content'));


?>