
<?php
session_start();
?>
<link href="booter.css" type=" text/css" rel="stylesheet"/>
<h1> Bienvenue, <?php echo $_SESSION['username']?></h1>
<br>
<a href="?action=add">ajouter un produit</a>
<a href="?action=modifyanddelete">modifier / supprimer un produit</a>

<?php

$db= new PDO("mysql:host=localhost;dbname=site-E-commerce", "root4", "");

if(isset($_SESSION['username'])){
	
if(isset($_GET['action'])){
	
if($_GET['action']=='add'){
	
	
if(isset($_POST['submit'])){
		
		$stock=$_POST['stock'];
		$title=$_POST['title'];
		$description=$_POST['description'];
		$prix=$_POST['prix'];
		$photo= $_FILES['img']['name'];
		$upload="images/".$photo;
		move_uploaded_file($_FILES['img']['tmp_name'], $upload);
		
		// requette  ajouter query execute
		$sql=("INSERT INTO products SET title='$title',description='$description',prix='$prix',photo='$photo' ,stock='$stock'");


	
		
	
		
		
		
if($title&&$description&&$prix&&$stock){
	
	$db= new PDO("mysql:host=localhost;dbname=site-E-commerce", "root4", "");
	// set the PDO error mode to exception
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	

	
	

$insert = $db->prepare("INSERT INTO products SET title='$title',description='$description',prix='$prix',photo='$photo' ,stock='$stock'");
$insert->execute();

		
	
	
}else{
	echo'veuillez remplir tous les champs';
}

}
} 

}
	?>
	
	<form action="" method="post" enctype="multipart/form-data">
	<h3>Titre du produits</h3><input type="text" name=" title"/>
	<h3>Descriptions du produit:</h3><textarea name=" description"></textarea>
	<h3>Prix :</h3><input type="text" name=" prix"/><br/><br/>
	<input type="hidden" name="MAX_FILE_SIZE" value="250000"/>
	<h3> Image :</h3><br>
	<input type="file" name="img"/><br><br>
	<h3>Stock :</h3><input type="text" name="stock"/><br><br>
	<input type="submit" name="submit"/>
	
	
	</form>
	
	<?php
	
}else if($_GET['action']=='modifyanddelete'){
	global $bd;

	$select=$db->prepare("SELECT title , description , prix , photo , stock FROM products ");
	$select->execute();
	
	while($s=$select->fetch(PDO::FETCH_OBJ)){
		
		echo $s->title;
		?>
		<a href="?action=modify&amp;id=<?php echo $s->id; ?>"> Modifier </a>
		<a href="?action=delete&amp;id=<?php echo $s->id; ?>"> X </a><br><br>
		
		<?php
	
}
	

	
}else if($_GET['action']=='modify'){
	
	
	$id=$_GET['id'];
	
	$select=$db->prepare("SELECT title , description , prix , photo , stock FROM products WHERE id");
	$select->execute();
	
	$data =	$select->fetch(PDO::FETCH_OBJ);
	
	?>
	
	<form action="" method="post" enctype="multipart/form-data">
	<h3>Titre du produits</h3><input  value="<?php echo $data->title;?>" type="text" name=" title"/>
	<h3>Descriptions du produit:</h3><textarea name=" description"><?php echo $data->description; ?></textarea>
	<h3>Prix</h3><input value="<?php echo $data->prix?>" name=" prix"/><br/><br/>
	<h3>Stock</h3><input value="<?php echo $data->stock?>" name="stock"/><br>
	<input type="submit" name="submit" value="Modifier"/>
	
	
	</form>
	
	<?php
	
	if(isset($_POST['submit'])){
		
		$title=$_POST['title'];
		$description=$_POST['description'];
		$prix=$_POST['prix'];
		$stock=$_POST['prix'];
		
		$update=$db->prepare("UPDATE title , description , prix , photo , stock FROM  products  WHERE  id");
		$update->execute();
		
		header('location: admin.php?action=modifyanddelete');
	}
	
	
	
}else if($_GET['action']=='delete'){
	$id=$_GET['id'];
	$delete =$db->prepare("DELETE FROM products WHERE id");
	$delete->execute();
	
	
}else{
	
	
	die('une erreur s\est produite');
	
	

	
	

	

	
	
	header('location:adminer.php');
	
}


?>
