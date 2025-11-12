


<?php
 
  $db_host = 'mysql-ngankam.alwaysdata.net';
  $db_user = 'ngankam';
  $db_password = 'dawwuB-zupnig-gopko6';
  $db_db = 'ngankam_zoo-test';
  $db_port = 8889;
 
 
 
 try{
	 $db_db = new PDO ('mysql:host=mysql-ngankam.alwaysdata.net;dbname=ngankam_zoo-test', $db_user, $db_password);
	 echo "Connection successful";	
	  
}	  
catch (PDOExecption $e){
	  echo "Erreur :" . $e->getMessage() . "<br/>" ;
	  die;
}
  
 ?>
