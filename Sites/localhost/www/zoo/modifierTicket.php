<?php
session_start();
if(!isset($_SESSION['mail']) && !isset($_SESSION['password'])){
	$_SESSION['flash']['error'] = "you are not allowed on this page";
	header('Location: authentificati1.php');
	exit();
	


if(session_status() == PHP_SESSION_NONE ) {
	session_start(); 
	
	
	}
	include("verification1.php");
$ID=$_GET['id'];
$pdoStat = $db_db->prepare("SELECT FROM `ticket` WHERE `ticket`.`id`='$ID'");
$pdoStat ->execute();
$afficher = $pdoStat->fetch();
var_dump($contact);
}
?>
<!DOCTYPE >
<html >

<head>
	<title>BootstrapExample</title>
<meta charget="atf-8">.
<meta name="viewport" content="width-device-width, initial-scale-1">
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body>
	<div class="container">
		<h1>Ajout d'une categorie </h1>
		<?php if(isset($_GET['id'])){ ?>
		<form method="post" action="">
			
			Login : <input type="mail" class="form-control" name="login" value="<?php echo $afficher['login']?>">
			Subject :<input type="text" required pattern ="A-Za-z ]{3,30}"class="form-control" name="sujet" value="<?php echo $afficher['sujet']?>">
			Description :<input type="text" class="form-control" name="description" value="<?php echo $afficher['description']?>">
			Priority :<input type="text" class="form-control" name="description" value="<?php echo $afficher['prio']?>">
			Zone :<input type="text" class="form-control" name="description" value="<?php echo $afficher['secteur']?>">
			Staut :<input type="text" class="form-control" name="description" value="<?php echo $afficher['statut']?>>
			<input type="submit" class="btn btn-priamary" name="update" value="update"/>
		</form>
		<?php } ?>
	</div>
	
</body>
</html>

