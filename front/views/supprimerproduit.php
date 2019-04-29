<?PHP
include "../core/panierC.php";
$panierC=new panierC();
if (isset($_POST["id_produit"])){
	$panierC->supprimerProduit($_POST['id_utilisateur'],$_POST["id_produit"]);
	header('Location: afficherpanier.php');
}
else {echo "non marcher";}

?>