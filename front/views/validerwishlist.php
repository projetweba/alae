<?php 
include "../core/wishlistC.php";
$wishlistC=new wishlistC();
$wishlist1C=new wishlistC();
	
	$wishlistC->validerwishlist($_POST['id_utilisateur'],$_POST['id_prod']);
	
header('Location: afficherwishlist.php');
?>