<?php
require_once('inde.php');
$db= new PDO("mysql:host=localhost;dbname=site-E-commerce", "root4", "");
$select= $db->prepare("SELECT  title , description , prix , photo , stock FROM products ");
$select->execute();

if(isset($_GET['show'])){
	
	$product=$_GET['show'];
	$select= $db->prepare("SELECT  title , description , prix , photo , stock FROM products WHERE title='$product'");
	$select->execute();
	
	$s=$select->fetch(PDO::FETCH_OBJ);
	
	
	
	?>
	<br><div style="text-align:center;">
	<img src="admin/img/<?php echo $s->title; ?>.jpg"/>
	<h1><?php echo $s->title; ?></h1>
	<h5><?php echo $s->description;?></h5><br>
	<h6>Stock : <?php echo $s->stock;?></h6><br>
	<?php if($s->stock!=0){?><a href=panier.php?action=ajout&amp;1=<?php echo $s->title; ?>&amp;q=1&amp;p=<?php echo $s->prix; ?>>Ajouter au panier </a><?php }else{echo'<h5 style="color:red;">Stock épuisé !</h5>';}?>
	</div><br>
	<?php
	  
	}else{
		
	
	
	



while($s=$select->fetch(PDO::FETCH_OBJ)){
	?>
	
	<a href="?show=<?php echo $s->title;?>"><img src="admin/img/<?php echo $s->title; ?>.jpg"/></a>
	<a href="?show=<?php echo $s->title;?>"><h2><?php echo $s->title;?></h2><br></a>
	<h5><?php echo $s->description;?></h5><br>
	<h4><?php echo $s->prix;?>Euros</h4><br></a>
	<h6>Stock : <?php echo $s->stock;?></h6><br></a>
	<?php if($s->stock!=0){?><a href=panier.php?action=ajout&amp;1=<?php echo $s->title; ?>&amp;q=1&amp;p=<?php echo $s->prix; ?>>Ajouter au panier </a><?php }else{echo'<h5 style="color:red;">Stock épuisé !</h5>';}?>
	<br><br><br>
<?php
}

?>
<br><br><br><br>

<?php

}
require_once('foot1.Php')


?>

