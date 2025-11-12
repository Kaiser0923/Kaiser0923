<?php
    session_start();
    //Création des variables d'affichage des liens disponibles en fonction des droits de la personne sur le site (visiteur, inscrit, membre, admin)
    if(isset($_SESSION["pseudo"])){
        $pseudo = $_SESSION["pseudo"];
        $right = $_SESSION["connexion"];
        $affip = $_SESSION["pseudo"];
        $lien = "deconnexion.php";
        $connexion = "Déconnexion";
        $profil = "profil/profil.php";
    } else {
        $right = "";
        $pseudo = "used";
        $affip = "profil";
        $lien = "login.html";
        $connexion = "Se connecter";
        $profil = "login.html";
    }
    if($right == "2"){
        $liste="profil/listeutili.php";
        $membre="Liste Inscrits";
        $tresor="tresorerie/tresorerie.php";
        $affi="Trésorerie";
    } else {
        $liste="";
        $membre="";
        $tresor="";
        $affi="";
    }
    //Récupration des info dans le lien si il y en a
    if(isset($_GET["permi"] )) {
        $permi = $_GET["permi"];
    }
    if(isset($_GET["nvx"] )) {
        $nvx = $_GET["nvx"];
    }
    if(isset($_GET["inscris"] )) {
        $inscris = $_GET["inscris"];
    }
    if(isset($_GET["achat"] )) {
        $inscris = $_GET["achat"];
    }
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anim'Eisti</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.2/iconfont/material-icons.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link href="Pageprincipale.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/favicon.jpg" />
    <link href="Pageprincipale2.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
    <!--
    Page principale du site, permet d'aller sur tout les liens du site et affiche une presentation de l'asso/site 
    -->
    <a name="home">
        <!--- Start Navigation -->
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/main.js"></script>
        <!--- For Navigation -->
        <div class="nav-outer">
            <div class="nav-wrap">
                <nav class="navigation">
                    <div class="logo"><a href="Pageprincipale.php"><img src="logo.png"></a></div>
                    <div class='nav' nav-menu-style="yoga">
                        <ul class="nav-menu">
                            <li><form class="bar" action="./profil/barre.php" method="POST">
                                <input type="text" name="rech">
                                <input type="submit" value="Rechercher un utilisateur"/>
                                </form>
                            </li>
                            <li><a href="<?php echo $liste ; ?>"><?php echo $membre ; ?></a></li>
                            <li><a href="<?php echo $tresor ; ?>"><?php echo $affi ; ?></a></li>
                            <li><a href="<?php echo $profil ; ?>?inscri=<?php echo $pseudo ; ?>"><?php echo $affip ; ?></a></li>
                            <li><a href="./Boutique/boutique.php">Shop</a></li>
                            <li><a href="event/event.php">Evenements</a></li>
                            <li><a href="forum/forum.php">Forum</a></li>
                            <li><a href="rejoindre/nousrejoindre.php">Nous rejoindre</a></li>
                            <li><a href="<?php echo $lien ; ?>"><?php echo $connexion ; ?></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="nav-clear"></div>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
    <div class="row">
    <div class="col-2">

    </div>
    <div class="col-8">
    <div class="box">
    <div class="all">
    <div class="box3">
     <div class="titre">
     <p class="text-left">Anim'eisti</p>
     </div>
     </div>
    <div class="box2">
     <div class="contenu1">
     <p class="text-center">Anim’EISTI est une association au sein de CYTech englobant des activités concernant le rayonnement de la culture japonaise et asiatique par le visionnage de séries et de films d’animation, et l’organisation de soirées karaoké.

La totalité d’une série animée pourra être diffusée (en plusieurs semaines) si elle n’excède pas la douzaine d’épisodes.

Des séances « découverte » seront parfois proposées, au cours desquelles seul les premiers épisodes d’une série seront diffusés.

Vous pourrez retrouver les diffusions et soirées à venir dans la catégorie évènements de ce site. Cette association se voulant collaborative, nous vous invitons à donner votre avis sur les épisodes diffusés et surtout n'hésitez pas à nous conseiller pour de prochaines diffusions.
</p>
     </div>
     </div>
	 <div class="box3">
     <div class="titre">
     <p class="text-left">Règles du forum et de la boutique</p>
     </div>
     </div>
    <div class="box2">
     <div class="contenu1">
     <p class="text-center">

     Par défaut, vous ne pouvez pas écrire d’article lorsque vous vous inscrivez sur notre site, il faut d'abord être membre. Pour se faire, vous devez visiter la catégorie nous rejoindre pour faire partie de l'association et ainsi écrire dans le forum. Tout le monde est invité à participer ! Merci de rester poli, et d’éviter d’écrire dans un français trop abrégé. On vous demandera aussi d’éviter le spoil. Tout commentaire indécent ou déplacé entrainera une supression du compte par les admins.

     En tant que membre, vous pouvez nous soutenir en achetant un produit sur la boutique. Tout nos produits seront livrés dans les plus brefs délais. De plus aucun retour n'est possible.

</p>
     </div>
     </div>
</div>
</div>
</div>
</body>
<!--
Script pour affficher des pop up si il y en a à afficher 
-->
<script>
    if(<?php echo $permi ; ?>){alert("N'avez pas les droits")}
</script>
<script>
    if(<?php echo $nvx ; ?>){alert("Bienvenue vous êtes désormais un membre de l'Association ようこそ")}
</script>
<script>
    if(<?php echo $inscris ; ?>){alert("Vous êtes déjà connecté")}
</script>
<script>
    if(<?php echo $inscris ; ?>){alert("Félicitaion pour votre achat, votre commande est confirmée")}
</script>
</html>
