<?php
 
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'zoo';
  $db_port = 8889;
 
 
 
 try{
	 $db_db = new PDO ('mysql:host=localhost;dbname=zoo', $db_user, $db_password);
	 echo "Connection successful";	
	  
}	 
catch (PDOExecption $e){
	  echo "Erreur :" . $e->getMessage() . "<br/>" ;
	  die;
}
  
 ?>










