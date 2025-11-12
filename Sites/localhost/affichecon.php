<?php
session_start();
include('header.php');
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
<meta charget="atf-8">.
<meta name="viewport" content="width-device-width, initial-scale-1">
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
			
		
	</table>
</div>

<body>
	
	
	<div class="container">
		
	<h1> Liste of complaint</h1>
	<table class="table table-bordered table-hover table-stripped">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Sujet</th>
			<th>Mail</th>
			<th>Message</th>
			
		</tr>
		
		<?php 
		 
		include_once('verification1.php');
$db_db = new PDO ('mysql:host=localhost;dbname=zoo', $db_user, $db_password);


$pdoStat = $db_db->prepare('SELECT * FROM contact ');

$executeIsOk = $pdoStat->execute();

$contact = $pdoStat->fetchAll();



		?>
		<tbody>
		<?php foreach ($contact as $contact): ?>
			
			<tr>
				<td><?php echo htmlspecialchars($contact['id']) ?></td>
			
				<td><?php echo ($contact['name']) ?></td>
			
				<td><?php echo ($contact['sujet']) ?></td>
			
				<td><?php echo ($contact['mail']) ?></td>
			
				<td><?php echo ($contact['message']) ?></td>
			
				
			
				
				<td><?php echo "<a href='delete.php?id=".$contact['id'] ."' onclick='return confirm(\"Are your sure you want to ......?\");' class='btn btn-danger'>Supprimer</a>";?></td>
				<td><?php echo "<a href='modifierTicket.php?id=".$contact['id'] ."' class='btn btn-warning'>Modifier</a>";?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
</body>

</html>
