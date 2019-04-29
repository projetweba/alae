<?PHP
include "../core/panierC.php";
include "../entities/panier.php";
// if(is_int($_POST['qte'])==false)
	// {
		// header('Location: affichererreur1.php');
		// die;
	// }
echo $_POST['ref'];
$panier1=new panier($_POST['ref'],$_POST['qte']);
$panier1C=new panierC();
$panier1C->ajouterPanier($_POST['id_utilisateur'],$_POST['ref'],$_POST['qte']);
header('Location: shop-page.php');
?>