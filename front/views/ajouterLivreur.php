<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";

if (isset($_POST['nom_liv']) and isset($_POST['adresse_liv']) and isset($_POST['tel_liv']) and isset($_POST['mail_liv']))
{
		$livreur1=new livreur($_POST['nom_liv'],$_POST['adresse_liv'],$_POST['tel_liv'],$_POST['mail_liv']);


		//var_dump($livreur1);
//}


$livreur1C=new LivreurC();
$livreur1C->ajouterLivreur($livreur1);
header('Location: livreur.html');	
}
else
{
	echo "vérifier les champs";
}

?>