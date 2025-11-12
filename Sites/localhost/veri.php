<?php

if(isset($_POST['mail'])  && isset($_POST['password'])) { // verifier si l'utilisateurs à rentrer des informations 
	
	
	// Nous allons mettre l'email et le mot de passe dans des variables 
	$email =$_POST['mail'];
	$password =$_POST['password'];
	
	// Connexion à la base de données
	$nom_serveur = "localhost";
	$utilisateur = "root";
	$mot_de_passe = "root";
	$nom_bd = "zoo";
	$con = mysqli_connect($nom_serveur , $utilisateur , $mot_de_passe , $nom_bd );
	
	
	// requete pour selectionner l'utilisateur qui a pour email et  mot de passe les identifiants qui ont été entrées 
	$req = mysqli_query($con , "SELECT * FROM user WHERE mail ='$email' AND  password ='$password' ");
	$num_ligne = mysqli_num_rows($req); // Compter le nombre de ligne ayant rapport a la requette SQL
	if($num_ligne > 0){
		header("Location : index.php"); // Si le nombre est > 0 , on est rediriger vers  la page d'accueil
		
		}else{ // Si non 
			echo ("Adresse mail ou mots de passe incorectes !");
			}
	
	
	
	
		
	}
?>
