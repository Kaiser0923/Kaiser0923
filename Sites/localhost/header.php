<?php

if(session_status() == PHP_SESSION_NONE ) {
	session_start(); 
	}

?>

<html>
  <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initail-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" type=" text/css" href="header.css">
   
		
    
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
		<li><a href ="formTicket.php" class= "nav-links">  Buy Ticket </a>
      <ul>
<li><a href="#" class="nav-links" >Load</a></li>
</ul>
    </li>
		<li><a href ="recupTicket.php" class ="nav-links">Ticket </a></li>
		<li><a href ="contact.php" class ="nav-links">Contacts Us</a></li>
    <li><a href ="logout.php" class ="nav-links nav-links-btn">Log Out</a></li>
    
      
    </ul>
    
   </nav>
   
</body>

</html>

