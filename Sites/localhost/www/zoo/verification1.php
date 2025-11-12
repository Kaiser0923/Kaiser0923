<?php
 
  $db_host = '127.0.0.1';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'zoo';
  $db_port = 8888;
 
 
 
 try{
	 $db_db = new PDO ('mysql:host=127.0.0.1;dbname=zoo', $db_user, $db_password);
	 echo "Connection successful";	
	  
}	 
catch (PDOExecption $e){
	  echo "Erreur :" . $e->getMessage() . "<br/>" ;
	  die;
}
  
 ?>










