
<?php

session_start();
$user ='Maxjordan';
$password_definit ='1234';

if(isset($_POST['submit'])){
	
	$password = $_POST['password'];
	$username = $_POST['username'];
	
	
	if($username&&$password){
	
	
	if($username == $user&&$password == $password_definit){
		
	$_SESSION['username']=$username;
		
	header('Location: admin1.php');
		
		
}
	else{
	echo'Identifiant eronnes';
}

}
	else{
	echo'Veuillez remplir tous les champs';
}

}

?>
<link href="booter.css" type=" text/css" rel="stylesheet"/>
<h1> Administration - Connexion</h1>
<form action="" method="POST">
<h3> Pseudo :</h3><input type="text" name=" username"/><br><br>
<h3>Mot-de-passe </h3><input type="password" name="password"/><br><br>
<input type="submit" name="submit"/><br/><br/>
</form>
