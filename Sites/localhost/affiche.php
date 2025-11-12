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
		
	<h1> Liste des ticket</h1>
	<table class="table table-bordered table-hover table-stripped">
		<tr>
			<th>DateTime</th>
			<th>Login</th>
			<th>Subject</th>
			<th>Description</th>
			<th>Priority</th>
			<th>Zone</th>
			<th>Statut</th>
			 <th>Actions</th>
		</tr>
		
		<?php 
		 
		include_once('verification1.php');
$db_db = new PDO ('mysql:host=localhost;dbname=zoo', $db_user, $db_password);


$pdoStat = $db_db->prepare('SELECT * FROM ticket id="$ID"');

$executeIsOk = $pdoStat->execute();

$ticket = $pdoStat->fetch();



		?>
		<tbody>
		<?php foreach ($ticket as $ticket): ?>
			
			<tr>
				<td><?php echo htmlspecialchars($ticket['datet']) ?></td>
			
				<td><?php echo ($ticket['login']) ?></td>
			
				<td><?php echo ($ticket['sujet']) ?></td>
			
				<td><?php echo ($ticket['description']) ?></td>
			
				<td><?php echo ($ticket['prio']) ?></td>
			
				<td><?php echo ($ticket['secteur']) ?></td>
			
				<td><?php echo ($ticket['statut']) ?></td>
				<td><?php echo "<a href='delete.php?id=".$ticket['id'] ."' onclick='return confirm(\"Are your sure you want to ......?\");' class='btn btn-danger'>Supprimer</a>";?></td>
				<td><?php echo "<a href='modifierTicket.php?id=".$ticket['id'] ."' class='btn btn-warning'>Modifier</a>";?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
</body>

</html>
