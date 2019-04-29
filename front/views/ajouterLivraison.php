<?PHP
include "../entities/livraison.php";
include "../core/LivraisonC.php";

if ( isset($_POST['id_livreur']) and isset($_POST['adresse']) and isset($_POST['ville']) and isset($_POST['code_postal']) and isset($_POST['date_livraison']) )
{
		$livraison1=new livraison($_POST['id_livraison'],$_POST['id_livreur'],$_POST['adresse'],$_POST['ville'],$_POST['code_postal'],$_POST['date_livraison']);



$livraison1C=new LivraisonC();
$livraison1C->ajouterLivraison($livraison1);
header('Location: livraison.php');	
}
else
{
header('Location: affichererreur.php');
}

?>