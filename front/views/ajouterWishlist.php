<?php
	include "../core/WishlistC.php";
	include "../entities/wishlist.php";
	
	
	$wishlist1=new wishlist($_POST['id_produit']);
	$wishlist1C=new wishlistC();
	$wishlist1C->ajouterWishlist($_POST['id_utilisateur'],$_POST['id_produit']);
	header('Location: shop-page.php');
?>