<?php
if(!empty($_POST){
	if($Auth->login($_POST)){
		
		}else{
			echo "Mauvais identifiants";
			}
		
		}


?>
<!DOCTYPE html >
<html>

<head>
	<title>sans titre</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.37" />
</head>

<body>
	
<form method="post" action "inde1.php?p=login">
<label for=>Login: </label>
<input type="text" name="login"/>
<label for=>Mot de passe : </label>
<input type="text" name=" password">
<input type="submit" value="Se connecter">
</body>

</html>
