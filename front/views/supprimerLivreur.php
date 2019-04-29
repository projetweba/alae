<?PHP
include "../core/livreurC.php";
$livreurC=new LivreurC();

if (isset($_POST["id_liv"]))
{
	$livreurC->supprimerLivreur($_POST["id_liv"]);
	header('Location: afficherLivreur.php');
}
else 
{
	echo "erreur";
}
?>