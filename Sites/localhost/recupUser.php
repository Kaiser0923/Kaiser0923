<?php
session_start();
include_once('header.php');
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
		
	<h1> Liste des Utilisateurs</h1>
	<table class="table table-bordered table-hover table-stripped">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Username</th>
			<th>Password</th>
			<th>Telephone</th>
			<th>mail</th>
			<th>RoleId</th>
		</tr>
		
		<?php 
		 
		include_once('verification1.php');
$db_db = new PDO ('mysql:host=localhost;dbname=zoo', $db_user, $db_password);


$pdoStat = $db_db->prepare('SELECT * FROM user');

$executeIsOk = $pdoStat->execute();

$user = $pdoStat->fetchAll();



		?>
		<tbody>
		<?php foreach ($user as $user): ?>
			
			<tr>
				
			
				<td><?php echo ($user['id']) ?></td>
			
				<td><?php echo ($user['name']) ?></td>
			
				<td><?php echo ($user['prénom']) ?></td>
				
				<td><?php echo ($user['password']) ?></td>
			
				<td><?php echo ($user['tel']) ?></td>
				
				<td><?php echo ($user['mail']) ?></td>
				
				<td><?php echo ($user['roleid']) ?></td>
				
			
				<td><?php echo "<a href='delete_user.php?id=".$user['id'] ."' onclick='return confirm(\"Are your sure you want to ......?\");' class='btn btn-danger'>Supprimer</a>";?></td>
				
			</tr>
			<?php endforeach ?>
		</tbody>
</body>

</html>
