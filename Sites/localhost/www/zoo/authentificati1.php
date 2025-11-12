<?php
session_start();
include_once('verification1.php');
if (!empty($_POST['mail']) AND !empty($_POST['password'])) {
        //on recupere les champs

        $mail =  trim($_POST['mail']);
        $password =  trim($_POST['password']);
        
        
        
        //on check si le user existe dans la database
        
        $checkUserExist = $db_db->prepare('SELECT * FROM user WHERE mail = ? ');
        $checkUserExist->execute(array($mail));
        

        //si le username existe on continue le programme sinon on renvoie une erreur disant que le username n'existe pas
        
        if($checkUserExist->rowCount() > 0){

            //on recup les infos du user 
            
            $verif_user = $checkUserExist->fetch();
            
            
            //on verifie si le mdp donner et mdp de la database sont pareil
            
            if(password_verify($password, $verif_user['password'])) {
			
                //on transfert les infos dans une session
                
                $_SESSION['password'] = $verif_user["password"];
                $_SESSION['mail'] = $verif_user['mail'];
                $_SESSION['flash']['success'] = "Your are now connected ";
                
                //on redirige vers le home
                
                header('Location: principale.php');
                
                exit();
                

            } else {
                $err_password = "Incorrect password";
            }

        } else {
            $err_mail = "incorrect mail address";
        }
       
        
    } elseif (empty($_POST['mail'])) {
        $err_mail = "please complete this field !";
    }elseif(empty($_POST['password'])){
        $err_password = "please complete this field !";
    }


?>

<!DOCTYPE html >
<html >

<head>
	<title>sans titre</title>
	<link rel="stylesheet"  type ="text/css" href="authentification.css" >

</head>

<body>
	
	 <div class="mod">
		 
	  
	  
	<form action ="" method="post" >
		
		<h1> Connexion</h1>
		
		<?php
            if(isset($err_mail)){
                echo $err_mail;
            }
        ?>
	 
	  <input type="email"  placeholder="Enter email" name="mail" autocomplete="off" required />
	  
	<?php
        if(isset($err_password)){
            echo $err_password;
        }
         //if(isset($PW_verify)){
        //    echo $PW_verify;
        // }
        ?>
	<input type="password" placeholder="Enter password " name="password" autocomplete="off" required />
	
	<input type="submit" id='submit' class='btn' value='LOGIN' name="submit" >
 
	<small>Are you register ? if no<a href="signup.php">Or SIGN UP</a></small
	
	
	
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
 
