<div class="sop">
	<h4> Derniers Articles</h4>
	
	<?php
$db= new PDO("mysql:host=localhost;dbname=site-E-commerce", "root4", "");	
$select = $db->prepare("SELECT title, description , prix , photo FROM products ORDER BY id DESC LIMIT 0,3");
$select->execute();

while($s=$select->fetch(PDO::FETCH_OBJ)){
	?>
	
	<div style="text-align:center;"><h2 style="color:white"><?php echo $s->title;?></h2><br>
	<h5 style="color:white"><?php echo $s->description;?></h5><br>
	<h4 style="color:white"><?php echo $s->prix;?>Euros</h4></div>
	<br><br>
<?php
}
	?>
</div>
