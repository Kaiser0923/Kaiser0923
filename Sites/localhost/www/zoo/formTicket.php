<?php
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

<!DOCTYPE html >
<html >

<head>
	<title>sans titre</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet"  type ="text/css" href="ticket.css" >
	
</head>

<body>
	<form  method="POST" action ="ticket_serv.php"  class="whatsapp-form">
	
  <div class="mod" >
	  <h1>Ticket </h1>
	  <p>For any reservation at the zoo,  file this form</p>
	  
	  
	  
	
	<div>
	<label for="login">Enter Login</label><br><br>
	<input type="email"  name="mail" placeholder="mylogin@mail.com" required>
	</div><div><br><br><br>

	
	 <label>Subject</label> :  <br><br>
	 <textarea name ="sujet" ></textarea><br><br><br>
	
	 <label>Description</label> :  <br><br>
	 <textarea name ="description" ></textarea><br><br><br>
	
	 
	 <label>Priority levels </label> : 
	
	<select name="prio" id="levels" required>
	 <option value="" disabled selected hidden>Select</option>
	 <option value="high"> High</option>
	 <option value="critic"> critical</option>
	 <option value="alarm"> Alarming</option>
	 <option value="low">Low</option>
	 </select><br><br><br>
	 
	 <label> Zoo zone </label> : <br><br>
	 <select name="secteur" id="secteur" required>
	 <option value="" disabled selected hidden>Choisir</option>
	 <option value="zlion"> Lions zone </option>
	 <option value="zgorille"> Gorilla zone  </option>
	 <option value="zleo"> Leopards zone </option>
	 <option value="ztigres"> Tigers zone </option>
	 </select><br><br><br>
	 
	 
	 <label>statut </label> : 
	
	<select name="statut" id="danger" required>
	 <option value="" disabled selected hidden>Select</option>
	 <option value="start"> Started</option>
	 <option value="Inprogress"> In Progress</option>
	 <option value="end"> Ended</option>
	 </select><br><br><br>
	 
	
  
    
  </div>
  
  
  <button type="submit" class="btn ">Submit</button>
</form>
</body>

</html>
