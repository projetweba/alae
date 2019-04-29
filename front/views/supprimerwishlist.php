<?PHP
include "../core/wishlistC.php";
$wishlistC=new wishlistC();

	$wishlistC->supprimerproduit($_POST['id_utilisateur']);
	header('Location: afficherwishlist.php');


?>