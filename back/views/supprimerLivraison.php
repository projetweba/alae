<?PHP
include "../core/LivraisonC.php";

$LivraisonC=new LivraisonC();

if (isset($_POST["id_livraison"]))
{
	$LivraisonC->supprimerLivraison($_POST['id_livraison']);
	header('Location: livraison.php');
}
else 
{
	echo "erreur";
}

?>