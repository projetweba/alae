<?PHP
include "../core/livraisonC.php";
$livraisonC=new LivraisonC();

if (isset($_POST["id_livraison"]))
{
	$livraisonC->supprimerLivraison($_POST["id_livraison"]);
	header('Location:livraison.php');
}
else 
{
	echo "erreur";
}

?>