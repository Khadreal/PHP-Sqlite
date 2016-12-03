<?php 
	$pagetitle = "Search Result Page";
	require_once 'functions.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$keyword = $_POST['term'];
		
		
		$result = '';
		if(empty($keyword)) {
			$result = 'Contact Info Not Found';
		}
		

		if(!$result) {
			
			$data['result'] = search($keyword);

		} else {
			$data['result'] = $result;
		}
	}else{
		header("Location:index.php");
		exit;
	}


	$index = loadView('search-page', $data, false);
	loadView('master', array('content' => $index));
?>