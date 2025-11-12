<?php
session_start();
if(isset($_GET['id'])){
	
include("verification1.php");
$ID=$_GET['id'];
$delete = $db_db->prepare("DELETE FROM `user` WHERE `user`.`id`='$ID'");
$delete ->execute();
if($delete){
			
			header('Location: recupUser.php');
			}else{
				$message ='Echec de la suppression du ticket';
				}
	
}
?>

