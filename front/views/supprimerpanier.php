<?PHP
include "../core/panierC.php";
$panierC=new panierC();

	$panierC->supprimerPanier($_POST['id_utilisateur']);
	header('Location: afficherpanier.php');


?>