<?php
session_start();

try{
	$PDO=new PDO('mysql:host=localhost;dbname=zoo', $db_user, $db_password);
	$PDO->setAttribute(PDO::ATTR_ERRMODE,WARNING);
	}catch(PDOException $e){
		echo 'Connexion impossible';
		}

//Class Auth
require "class.auth.php";

ob_start();
include((isset($_GET[p])?$_GET[p]:'home')'.php');
$content_for_layout= ob_get_clean();
?>
<!DOCTYPE html PUBLIC ".//W3C//DTD XHTML 1.0 StricU/EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmins="http://www.w3.org/1999/xhtml"xml-lang="fr"lang="fr">
<head>
<meta http-equiv="Content-Type" content="lext/html; charset=UTF-8" >
<link rel="stylesheet" href="./theme/style.css" type="text/css" media ="screen" >
</head>
<body>
<div id= "conteneur">
<?php echo $content _for_layout; ?>
</div>
</body>
</html>
