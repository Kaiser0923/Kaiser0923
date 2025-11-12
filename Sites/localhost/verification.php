<?php
fuction multiply($a , $b){
	return $a , $b;
	
	}
	
	// recuperation des parametres 
	//Formulaires methode GET 
	
	$pass="";
	$email="";
	if(isset($_GET["userpass"]) ){
		$pass =$_GET["userpass"];
		
		}
		
	if(isset($_GET["usermail"]) ){
		$email = $_GET["usermail"];
		
		}
	
	echo("email GET : [$email]<br>");
	echo("pass GET : [$pass]<br>");
	
	//Formulaire methode POST
	$pass = "";
	$email ="";
	
	if(isset($_GET["userpass"]) ){
		$pass = $_POST["userpass"];	
		
		}
		
		if(isset($_GET["useremail"]) ){
		$email = $_POST["useremail"];	
		
		}
		echo("email  POST : [$email]<br> ");
		echo("pass  POST : [$pass]<br> ");
		
		// Syntaxe / type / test / boucles / fonctions /
		// declaration var ($nom = valeur; )
		
		$a = "Coucou";
		
		// Affichage echo() : renvoie vers le client 
		
		echo($a);	
		
		$s = "370" ; // string 
		$n = 15; // string 
		$f = 15.25;
		
		$result = $n + $f ; 
		echo("$result<br>");
		
		// Concatenation des chaînes 
		$result = $n . $f . $s ;
		echo("$result<br>");
		
		// tests 
		if(0){
			echo("0");
		
			}
			else if(1){
				echo("1 <br>------<br>");
				
				}
				else {
					
					}
					
		// boucles 
		for($i=0:$i<10:$i++){
			echo("$i <br>");
						}
						
		while(FALSE){
			echo("*");
			
			}
			
		$i = 5; 
		do{
			echo($i----);
			}
			whiles($i>0);
			
			// foctions 
			$result = multiply(10)
		

?>
