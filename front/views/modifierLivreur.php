<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";
if (isset($_GET['nom_liv'])){
	$livreurC=new LivreurC();
    $result=$livreurC->recupererLivreur($_GET['nom_liv']);
	foreach($result as $row){
		$nom_liv=$row['nom_liv'];
		$adresse_liv=$row['adresse_liv'];
		$tel_liv=$row['tel_liv'];
		$mail_liv=$row['mail_liv'];
?>
<form method="POST">
<table>
<caption>Modifier Livreur</caption>

<tr>
<td>Nom</td>
<td><input type="text" name="nom_liv" value="<?PHP echo $nom_liv ?>"></td>
</tr>

<tr>
<td>Adresse</td>
<td><input type="text" name="adresse_liv" value="<?PHP echo $adresse_liv ?>"></td>
</tr>

<tr>
<td>numero de telephone</td>
<td><input type="number" name="tel_liv" value="<?PHP echo $tel_liv ?>"></td>
</tr>

<tr>
<td>mail</td>
<td><input type="text" name="mail_liv" value="<?PHP echo $mail_liv ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>

<tr>
<td></td>
<td><input type="hidden" name="nom_ini" value="<?PHP echo $_GET['nom_liv'];?>"></td>
</tr>

</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livreur=new livreur($_POST['nom_liv'],$_POST['adresse_liv'],$_POST['tel_liv'],$_POST['mail_liv']);
	$livreurC->modifierLivreur($livreur,$_POST['nom_ini']);
	echo $_POST['nom_ini'];
	header('Location: livreur.html');
}
else 
{
	echo "erreur";
}
?>
</body>
</HTMl>