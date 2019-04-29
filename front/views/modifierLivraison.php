<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";


if (isset($_GET['id_livraison'])){
	$livraisonC=new LivraisonC();
    $result=$livraisonC->recupererLivraison($_GET['id_livraison']);
	foreach($result as $row){
		$id_livraison=$row['id_livraison'];
		$id_livreur=$row['id_livreur'];
		$adresse=$row['adresse'];
		$ville=$row['ville'];
		$code_postal=$row['code_postal'];
		$date_livraison=$row['date_livraison'];

?>
<form method="POST">
<table>
<caption>Modifier Livraison</caption>

<tr>
<td>ID Livraison</td>
<td><input type="number" name="id_livraison" value="<?PHP echo $id_livraison ?>"></td>
</tr>

<tr>
<td>ID Livreur</td>
<td><input type="text" name="id_livreur" value="<?PHP echo $id_livreur ?>"></td>
</tr>

<tr>
<td>date livraison</td>
<td><input type="date" name="date_livraison" value="<?PHP echo $date_livraison ?>"></td>
</tr>

<tr>
<td>Adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>

<tr>
<td>ville</td>
<td><input type="text" name="ville" value="<?PHP echo $ville ?>"></td>
</tr>

<tr>
<td>Code postal</td>
<td><input type="number" name="code_postal" value="<?PHP echo $code_postal ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>

<tr>
<td></td>
<td><input type="hidden" name="id_livraison_ini" value="<?PHP echo $_GET['id_livraison'];?>"></td>
</tr>

</table>
</form>
<?PHP
	}
}


if (isset($_POST['modifier'])){
	$livraison=new livraison($_POST['id_livraison'],$_POST['id_livreur'],$_POST['date_livraison'],$_POST['adresse'],$_POST['ville'],$_POST['code_postal']);
	$livraisonC->modifierLivraison($livraison,$_POST['id_livraison_ini']);
	echo $_POST['id_livraison_ini'];
	header('Location: livraison.php');
}
else 
{
	echo "erreur";
}
?>
</body>
</HTMl>