<?php
session_start();
require_once('verification1.php');


if(isset($_GET['id']) AND $_GET['id'] >0)
{
	$getid = intval($_GET['id']);
	$requser = $db_db->prepare("SELECT * FROM user where id=?");
	$requser->execute(array(getid));
	$userinfo = $requser->fetch();
	
	?>

<html>
	<head>
		<title> PHP </title>
		<meta charset="utf-8">
	</head>
	<body>
		<div align="center">
			<h2> Profile de <?php echo $userinfo['pseudo']; ?></h2>
			<br><br>
			Pseudo = <?php echo $userinfo['pseudo']; ?>
			<br>
			Mail = <?php echo $userinfo['mail']; ?>
			<?php
			if($userinfo['id'] == $_SESSION['id'])
			{
				?>
				<a href="#">Editer mon profil</a>
				<?php
				}
				
			?>
		</div>
	</body>
</html>
<?php 
}
?>
