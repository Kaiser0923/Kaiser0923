<?
session_start();
if(!isset($_SESSION['mail']) && !isset($_SESSION['password'])){
	$_SESSION['flash']['error'] = "you are not allowed on this page";
	header('Location: authentificati1.php');
	exit();
	


if(session_status() == PHP_SESSION_NONE ) {
	session_start(); 
	
	
	}
	

}
?>

<html>
  <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initail-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" type=" text/css" href="pageadmin.css">
  
    
  </head>
  <body>
	  <div class="nav-container">
   <nav class="navbar">
   <h1 id="navbar-logo"> KNIGHT</h1>
   <div class="menu-toggle" id="mobile-menu">
     <span class="bar"></span>
      <span class="bar"></span>
       <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
     
   </div>
   <ul class ="nav-menu">
	   
		
		<li><a href ="index1.php" class="nav-links">Home </a></li>
		<li><a href ="formTicket.php" class= "nav-links">  Ticket </a>
      <ul>
<li><a href="affichecon.php" class="nav-links" >Load</a></li>
</ul>
    </li>
		<li><a href ="recupTicket.php" class ="nav-links">Profile </a></li>
		<li><a href ="contact.php" class ="nav-links">Contacts Us</a></li>
		
    <li><a href ="logout.php" class ="nav-links nav-links-btn">Log out</a></li>
    
	
  



      
    </ul>
   <?php 
			
			// Set the new timezone
$matin=('11:00:00');
$soir=('22:00:00');
$midi=('12:00:00');
date_default_timezone_set('Europe/Paris');
$date = date('H:i:s');

if($date<=$matin){

 $img="image3/Zèbre.jpg";
}else if($date>=$midi){
	
	$img="image3/girafe.jpg";
}else if($date>=$soir) {
	
	$img="image3/panda.jpg";
	}
	
			echo "<li><a class='nav-links'> Heure : ".$date."</a></li>";
			?>		
			
     <img class="first" src="<?php echo($img);  ?>" />

		
   </nav>
   
    </div>
    <script src="app.js"></script>
	  
		
 

		
	  
	 <div class= "titre">
		 

		
	 <center><h1>Zoo Presentation </h1></center>
	 </div>
    <h5>
    Welcome to you
    </h5>
    <div id ="present">
		
    <h2><u> Wild animals</u></h2>
    <p><i>Wildlife traditionally refers to undomesticated animal species, but has come to include all organisms that grow or live wild in an area without being introduced by humans. Wildlife was also synonymous to game: those birds and mammals that were hunted for sport. Wildlife can be found in all ecosystems. Deserts, forests, rainforests, plains, grasslands, and other areas, including the most developed urban areas, all have distinct forms of wildlife. While the term in popular culture usually refers to animals that are untouched by human factors, most scientists agree that much wildlife is affected by human activities. Some wildlife threaten human safety, health, property, and quality of life. However, many wild animals, even the dangerous ones, have value to human beings. This value might be economic, educational, or emotional in nature.</i></p><br><br><br><br>
    </div>
    <br>
    <h3><u> Types of animals </u></h3>
    <ul >
		<li><strong>Lion</strong></li><br><br><div class ="zoom"><img  src="https://gdb.voanews.com/F04C0D88-C02B-4621-85E2-C7A3E51AA92F_w408_r1_s.jpg" alt="lion.jpeg"></div><p>Lions are known for being strong, ferocious and commanding. But behind the fierce façade, these big cats are social animals that live in tight units called prides where sisters look after, and will even nurse, one another’s cubs.</p><br><br><br><br>
		<li><strong>Tiger </strong></li><br><br><img src="https://miro.medium.com/max/1200/1*694y5GwOWsqflOtu_4Lj-g.png " alt="tiger.jpeg"><p>There are two recognized subspecies of tiger*: the continental (Panthera tigris tigris) and the Sunda (Panthera tigris sondaica). The largest of all the Asian big cats, tigers rely primarily on sight and sound rather than smell for hunting. They typically hunt alone and stalk prey. A tiger can consume more than 80 pounds of meat at one time. On average, tigers give birth to two to four cubs every two years. If all the cubs in one litter die, a second litter may be produced within five months.</p><br><br><br><br>
		<li><strong>Crocodile </strong></li><br><br><img src="https://besthqwallpapers.com/Uploads/4-3-2020/123699/thumb2-crocodile-wildlife-river-alligator-wild-animals.jpg" alt="crocodile.jpeg"><p>Crocodiles are large, carnivorous reptiles of the order Crocodilia, found in tropical and subtropical regions. Crocodiles live in swamps or on river banks and catch their prey in the water. They have flattened bodies and tails, short legs, and powerful jaws. The eyes, ears, and nostrils are located near the top of the head and are exposed when the crocodile floats on the surface of the water. The ears and nostrils have valves that close when the animal is submerged.</p><br><br><br><br>
		<li><strong>Snake</strong></li><br><br><img src="https://animals.sandiegozoo.org/sites/default/files/2016-11/animals_hero_cobra.jpg" alt="snake.jpeg"><p>Cobras are venomous snakes related to taipans, coral snakes, and mambas, all members of the Elapidae family. Snakes in this family cannot fold their fangs down, as vipers can, so the fangs are generally shorter. They kill their prey by injecting venom through their fangs. The venom is a neurotoxin that stops the victim's breathing and heartbeat. A cobra only attacks a human if it feels threatened. As with any venomous snake, a bite from a cobra can be deadly if not treated properly.</p>
    </ul>
 
  </body>
  
</html>
<?php
// Set the new timezone
$matin=('11:00:00');
$soir=('19:00:00');
$midi=('12:00:00');
date_default_timezone_set('Europe/Paris');
$date = date('H:i:s');
echo " il est $date";
if($date<=$matin){
echo "C'est le matin";
$img="image3/Zèbre.jpg";
}else if($date>=$midi){
	echo"C'est l'apres midi";
	$img="image3/girafe.jpg";
}else if($date>=$soir) {
	echo"C'est le soir ";
	$img="image3/panda.jpg";
	}
	


?>

