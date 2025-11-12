<?php
//Page qui rentre dans la base de donnée txt les informations du nouveau compte créé

$genre = $_POST['genre'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$comptes = file("donneecomptes\usernames.txt");
$adressemail = file("donneecomptes\login.json");

// Test pour vérifier si l'adresse mail ou le pseudo est déjà utilisé
foreach ($adressemail as $key => $value) {
    if(trim($value) == trim($email)){header("Location: signup.php?pseudom=used"); exit();}# code...
}

$nom = $_POST['name'];
$prenom = $_POST['prenom'];
$mdp = $_POST['motdepasse'];

//écriture dans la base txt des informations 

$comptes = fopen("donneecomptes\long.log", "a");
fwrite($comptes,"\n$genre\n$nom\n$prenom\n$numero\n$mdp\n$email\n");
fclose($comptes);
$mail = fopen("donneecomptes\login.json", "a");
fwrite($mail,"\n$email");
fclose($mail);
$mdp = fopen("donneecomptes\login.json", "a");
fwrite($mdp,"\n$mdp");
fclose($mdp);
header("Location: index1.php"); exit();
?>
