<?php

session_start();
include('header.php');
?>

<!DOCTYPE html >
<html >

<head>
	<title>sans titre</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	 <link rel="stylesheet" type=" text/css" href="style.css">
</head>

<body>
	<div>
	<small><h1> Welcome : <?= $_SESSION['mail']; ?></h1></small>
	
	</div>
	
</body>



