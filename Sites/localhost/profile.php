
<?php
  session_start();
  /*Cette page affiche le profil de la personne connécté sur la session, la page fonctionne globalement de la même manière que 
  la page profilvadmin.php sauf qu'elle récupère directement les informations du profil via les variables SESSION*/
  if(!isset($_SESSION["connexion"])) {
    header("Location:../login.html?inscri=true"); exit();
  }
  $connexion = $_SESSION["connexion"];
  $pseudo = $_SESSION["pseudo"];
  $mdp = $_SESSION["mdp"];
  $mail = $_SESSION["mail"];
  $prenom = ucfirst($_SESSION["prenom"]);
  $nom = ucfirst($_SESSION["nom"]);
  $valgenre = $_SESSION["genre"];
  if($valgenre == 1){
    $genre = "Monsieur";
  }else{
    $genre = "Madame";
  }
  if($connexion == "2") {
    $fonction = "Admin";
  } elseif ($connexion == "1") {
    $fonction = "Membre";
  } else {
    $fonction = "Inscrit";
  }
?>
<link rel="stylesheet" href="profil.css">
<!DOCTYPE html>
<!--
Affichage du profil 
-->
<html>
<head>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.2/iconfont/material-icons.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event Anim'Eisti</title>
    <link href="../Pageprincipale.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/favicon.jpg" />
    <link rel="stylesheet" href="./profil.css">
</head>
<body>
<div class="nav-outer">
    <div class="nav-wrap">
        <nav class="navigation">
            <div class="logo" ><a href="/ProjetInfo123/Pageprincipale.php"><img src="unnamed.png"></a></div>
            <div class='nav' nav-menu-style="yoga">
        </div>
        </nav>
    </div>
</div>
<body>
<!-- partial:index.partial.html -->
<div class="container">

  <div class="card">
    <div class="img">
      <img src="https://placeimg.com/250/250/tech">
    </div>
    <div class="info">
    <span class="job"><?php echo $genre ;?></span>
      <span class="name"><?php echo $prenom ;?><?php echo $nom ;?></span>
      <span class="job"><?php echo $fonction ;?></span>
      <span class="id"><?php echo $pseudo ;?></span>
    </div>
    <div class="button">
      <button>Infos personnelles</button>
    </div>
    <div class="info">
      <span class="job">Adresse mail :<?php echo $mail ;?></span>
      <span class="job">Mot de passe :<?php echo $mdp ;?></span>
      <div class="button">
        <!--
        Ici on a deux bouttons, le premier permet de modifier le mot de passe et le deuxième permet de supprimer le compte
        -->
        <button><a href="modif.php?pseudo=<?php echo $mail ;?>"> Modifier le mot de passe</a></button>
      </div>
      <div class="button">
        <button><a href="Supprimer.php?pseudo=<?php echo $mail ;?>"> Supprimer le compte</a></button>
      </div>
    </div>
  </div>
  
</div>
<!-- partial -->
  
</body>
</html>

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
