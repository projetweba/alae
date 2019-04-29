<?PHP
include "../core/commandeC.php";
$commandeC=new CommandeC();
if (isset($_POST["id_commande"])){
	$commandeC->validerCommande($_POST["id_commande"]);
	header('Location: commande.php');
}

?>