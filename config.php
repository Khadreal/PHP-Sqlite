<?php 
	error_reporting(E_ALL);
    ini_set('display_errors', 1);
	//Open SQLITE conn and create a table
	class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('contact.db');
      }
   }

   $db = new MyDB();

    $table = "contact_info";
    $query = "SELECT ID FROM " . $table;
    $query = $db->exec($query);
    
   if(!$db){
   	echo $db->lastErrorMsg();
   }else{
   	if(!$query){
    	$sql = "CREATE TABLE contact_info (ID INTEGER PRIMARY KEY AUTOINCREMENT, name VARCHAR(30) NOT NULL, email VARCHAR(30) NOT NULL)";
	   	$ret = $db->exec($sql);
		if(!$ret){
		  echo $db->lastErrorMsg();
		} else {
		  echo "Table created successfully\n";
		}	
    }
   } 
   $db->close();
 ?>