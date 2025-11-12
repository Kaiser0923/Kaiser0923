<?php
session_start();
if(!isset($_SESSION['mail']) && !isset($_SESSION['password'])){
	$_SESSION['flash']['error'] = "you are not allowed on this page";
	header('Location: authentificati1.php');
	exit();
	


if(session_status() == PHP_SESSION_NONE ) {
	session_start(); 
	
	
	}
	
}
?>
<!DOCTYPE >
<html >

<head>
	<title>BootstrapExample</title>
<meta charset="utf-8">
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
			<?php 
			include("verification1.php");
$ID=$_GET['id'];
$pdoStat = $db_db->prepare("SELECT * FROM ticket WHERE id LIKE :ans ");
$pdoStat->bindValue('ans', '%' .$ID. '%');
$pdoStat ->execute();
$afficher = $pdoStat->fetch();


 ?>
 <br>
			Login : <p ><?php echo $afficher['login']?></p>
			Subject :<input type="text" required pattern ="A-Za-z ]{3,30}"class="form-control" name="sujet" placeholder="<?php echo $afficher['sujet']?>">
			Description :<input type="text" class="form-control" name="description" placeholder="<?php echo $afficher['description']?>">
			Priority :<input type="text" class="form-control" name="prio" placeholder="<?php echo $afficher['prio']?>">
			Zone :<input type="text" class="form-control" name="secteur" placeholder="<?php echo $afficher['secteur']?>">
			Staut :<input type="text" class="form-control" name="statut" placeholder="<?php echo $afficher['statut']?>">
			<input type="submit" class="btn btn-priamary" name="update" placeholder="update"/>
		</form>
		
		<?php 
		if (isset($_POST['update'])) {
//$LOGIN=$_POST['login'];
$SUJET=$_POST['sujet'];
$DESCRIPTION=$_POST['description'];
$PRIO=$_POST['prio'];
$SECTEUR=$_POST['secteur'];
$STATUT=$_POST['statut'];
$update = $db_db->prepare("UPDATE ticket SET sujet='$SUJET',description='$DESCRIPTION',prio='$PRIO',secteur='$SECTEUR' ,statut='$STATUT' WHERE id='$ID'");
$update->execute();
header('Location: recupTicket.php');
	}
		} ?>
	</div>
	
</body>
</html>

