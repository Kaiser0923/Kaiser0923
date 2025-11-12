<?php
session_start();
include_once('verification1.php');

$db_db = new PDO ('mysql:host=localhost;dbname=zoo', $db_user, $db_password);


$pdoStat = $db_db->prepare('SELECT * FROM ticket ORDER BY id ASC');

$executeIsOk = $pdoStat->execute();

$ticket = $pdoStat->fetchAll();



?>

<!DOCTYPE html >
<html >

<head>
	<title>sans titre</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet"  type ="text/css" href="" > 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/lib/bootstrap.min.css">
  <script src="/lib/jquery-1.12.2.min.js"></script>
  <script src="/lib/bootstrap.min.js"></script>
</head>

<body>
	<div class="container"></div>
	<h1>Liste des tickets </h1>
	<br><br>
	<table>
		<thead>
			<tr>
			<th>DateTime</th>
			<th>Login</th>
			<th>Subject</th>
			<th>Description</th>
			<th>Priority</th>
			<th>Secteur</th>
			<th>Statut</th>
			 
		</tr>
		</thead>
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
			</tr>
			<?php endforeach ?>
		</tbody>
		
		
		
		
	</table>
	
	<ul>
		<?php foreach ($ticket as $t): ?>
		
		<li>
			<?= $t ?>
			
			
			
			
		</li>
		
		
		
		<?php endforeach ?>
	</ul>
	
	</body>
	
	</head>
	
	</html>
