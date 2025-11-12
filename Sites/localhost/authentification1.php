<?php
//Page qui attribue les variables SESSION lorqu'un utilisateur se connecte
session_start();
$email = $_POST['email'];
$mdp = $_POST['password'];
$info = file("donneecomptes/comptes.txt");
$admin = file("donneecomptes/admin.txt");
$membre = file("donneecomptes/membre.txt");
//recherche dans le fichier txt qui contient les informations du compte si l'adresse mail et bonne et si le mot de passe correspond
foreach ($info as $key => $value) {
    
    if(trim($value) == trim($email)){
        if (trim($info[$key-1]) == trim($mdp)) {
            //attribution des variabnles connexion qui vont servir a differencier les membres, les admins et les inscrits
            //Les attributions se font dans l'ordre de gradeur des pouvoirs
            //c-a-d dans un premier temps l'utilisateur recoit la variables d'un simple compte inscrit
            //ensuite si la personne est membre la variable change et devient membre 
            //pour finir c'est la même pour la variable admin 
            //cela permet à une personne en même temps membre et admin de recevoir la permission la plus haute qu'il peut avoir
            $_SESSION["connexion"] = "3";
            foreach ($membre as $key2 => $value2) {
                if(trim($value2) == trim($email)){
                    $_SESSION["connexion"] = "1";
                }
            }
            foreach ($admin as $key1 => $value1) {
                if(trim($value1) == trim($email)){
                    $_SESSION["connexion"] = "2";
                }
            }
            $_SESSION["pseudo"] = $info[$key-2];
            $_SESSION["numero"] = $info[$key-3];
            $_SESSION["mdp"] = $info[$key-1];
            $_SESSION["mail"] = $info[$key];
            $_SESSION["prenom"] = $info[$key-4];
            $_SESSION["nom"] = $info[$key-5];
            $_SESSION["genre"] = $info[$key-6];
            //création de la variable qui pourra servir de panier pour l'utilisateur
            $_SESSION["panier"] = array();
            header("Location: Pageprincipale.php"); exit();
        } else {
            header("Location: login.html?mdp=used"); exit();
        }
        
    }
}
header("Location: login.html?adresse=used"); exit();
?>
<!DOCTYPE html >
<html >

<head>
	<title>sans titre</title>
	<link rel="stylesheet"  type ="text/css" href="authentification.css" >

</head>

<body>
	
	 <div class="mod">
		 
	  <?php 
	  if(isset($erreur)){
		  
		  echo "<p class = 'Erreur'>$erreur</p>" ;		
		  
		  }
	  ?>
	  
	<form action ="" method="post" >
		
		<h1> Connexion</h1>
		
	  
	  <input type="text"  placeholder="Entrer l'email" name="mail" required />
	  
	
	<input type="password" placeholder="Entrer le mot de passe " name="password" required />
	
	<input type="submit" id='submit' class='btn' value='LOGIN' name='valider' >
 
	<small>Are you register ? <a href="signup.php"> SIGN UP</a></small
	
	
	
	</div>
	<!--
	Affichage de message d'erreur si il y a un problème dans la saisie des informations 
	-->
	<script type="text/javascript">
		const queryString = window.location.search;
		const urlParams = new URLSearchParams(queryString);
		const pseudo = urlParams.get('mdp');
		if(pseudo){alert("Le mot de passe est faux")}
		const queryString2 = window.location.search;
		const urlParams2 = new URLSearchParams(queryString);
		const mail = urlParams.get('adresse');
		if(mail){alert("Cette adresse mail n'est pas associé à un compte")}
		const queryString3 = window.location.search;
		const urlParams3 = new URLSearchParams(queryString);
		const changed = urlParams.get('changed');
		if(changed){alert("Veuillez vous reconnecter")}
		const queryString4 = window.location.search;
		const urlParams4 = new URLSearchParams(queryString);
		const inscri = urlParams.get('inscri');
		if(inscri){alert("Veuillez vous connecter")}
	</script>
</body>

</html>


