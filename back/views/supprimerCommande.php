<?PHP
include "../core/commandeC.php";
$commandeC=new CommandeC();
if (isset($_POST["id_commande"])){
	$commandeC->supprimercommande($_POST["id_commande"]);
	header('Location: commande.php');
}

?>