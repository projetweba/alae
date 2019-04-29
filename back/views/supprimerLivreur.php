<?PHP
include "../core/LivreurC.php";

$LivreurC=new LivreurC();

if (isset($_POST["id_liv"]))
{
	$LivreurC->supprimerLivreur($_POST['id_liv']);
	header('Location: livreur.php');
}
else 
{
	echo "erreur";
}

?>