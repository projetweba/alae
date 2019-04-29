<?PHP
include "../entities/livraison.php";
include "../core/LivraisonC.php";

if ( isset($_POST['id_livreur']) and isset($_POST['id_commande']) and isset($_POST['adresse']) and isset($_POST['ville']) and isset($_POST['code_postal']))
{
		$livraison1=new livraison($_POST['id_livraison'],$_POST['id_livreur'],$_POST['id_commande'],$_POST['adresse'],$_POST['ville'],$_POST['code_postal']);


	//	var_dump($livraison1);
//}
echo "hello";
$Livraison1C=new LivraisonC();
$Livraison1C->ajouterLivraison($livraison1);
header('Location: form-livraison.html');	
}
else
{
	echo "Vérifier les champs";
}

?>