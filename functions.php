<?php 
require_once 'config.php';
$limit = 5;
$start = 0;

   $db = new MyDB();

//Load View Function
define('VIEW_DIRECTORY', 'views/');

function loadView($name, array $data = array(), $output=true) {

	$fullPath = VIEW_DIRECTORY . $name . '.php';

	if(file_exists($fullPath)) {

		extract($data);
		ob_start();
		require_once $fullPath;
		$pageContent = ob_get_contents();
		ob_end_clean();
		if($output) {
			echo $pageContent;
			return;
		}
		return $pageContent;

	} else {
		echo $fullPath . " File not found";
	}
}

//sanitize input field
function sanity($var){
	$var = trim($var);
	$var = stripslashes($var);
	$var = str_replace(",", "", $var);
	$var = strip_tags($var,"");
	$var = htmlspecialchars($var);
	return $var;
}

//Add New Contact to Database(SQLite)
function addContact($name, $email) {
	global $db;
	global $table; 

	//Insert To Database(SQLite)
	$query = "INSERT into $table(name, email) VALUES ('$name', '$email')";
	$ret = $db->exec($query);

	return true;
}

//Fetch from Database(SQLite)
function fetchInfo() {
	global $db;
	global $table; 
	global $start;
	global $limit;
	
	$rete = array();
	$ret = $db->query("SELECT * from $table  LIMIT $start, $limit");
	while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
     	$rete[] = $row;
    }

	return array($rete);	
}

function paginate(){
	global $db;
	global $table; 
	global $start;
	global $limit;

	$rows = $db->query("SELECT COUNT(*) as count FROM $table");
	$row = $rows->fetchArray(SQLITE3_ASSOC);
	$numRows = $row['count'];
	$total=ceil($numRows/$limit);
	return $total;
}

function search($keyword){
	global $db;
	global $table; 
	global $start;
	global $limit;
	//%200%

	$result = array();
	$res = $db->query("SELECT * FROM $table WHERE name LIKE '%".$keyword."%'");
	while($row = $res->fetchArray(SQLITE3_ASSOC) ){
     	$result[] = $row;
    }

	return array($result);
}
?>