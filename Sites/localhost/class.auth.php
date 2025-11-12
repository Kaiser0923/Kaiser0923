<?php class Auth{
	function login($d){
		global $PDO;
		$req=$PDO->prepare('SELECT * FROM user WHERE login=:login AND password=:password');
		$req->execute($d);
		$data=fetchAll();
		print_r($data);
		
		}
	
	
	}
	
	
	
$Auth= new Auth();

?>
