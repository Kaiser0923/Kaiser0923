<?php

include_once('verification1.php');
	
	$
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sans titre</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.37" />
</head>

<body>
	
</body>

</html>
$pdoStat = $db_db->prepare('SELECT * FROM ticket WHERE login = :mail');
	$pdoStat->bindValue(':mail',$_GET['login']);
	$executeIsOk = $pdoStat->execute();

	$ticket= $pdoStat->fetch();
	var_dump($ticket);
