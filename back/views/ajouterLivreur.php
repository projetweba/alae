<?PHP
include "../entities/livreur.php";
include "../core/LivreurC.php";

if (isset($_POST['id_liv']) and isset($_POST['prenom_liv']) and isset($_POST['adresse_liv']) and isset($_POST['tel_liv']) and isset($_POST['mail_liv']))
{
		$livreur1=new livreur($_POST['id_liv'],$_POST['prenom_liv'],$_POST['adresse_liv'],$_POST['tel_liv'],$_POST['mail_liv']);



$livreur1C=new LivreurC();
$livreur1C->ajouterLivreur($livreur1);
header('Location: livreur.php');	
}
else
{
	echo "vérifier les champs";
}

?>