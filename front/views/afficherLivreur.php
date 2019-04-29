<?PHP
include "../core/livreurC.php";
$livreur1C=new LivreurC();
$liste=$livreur1C->afficherLivreurs();

//var_dump $liste;
//var_dump($liste->fetchAll());

?>
<table border="1">
<tr>
<td>Nom</td>
<td>Adresse</td>
<td>Numero telephone</td>
<td>mail</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($liste as $row){
	?>
	<tr>
	<td><?PHP echo $row['nom_liv']; ?></td>
	<td><?PHP echo $row['adresse_liv']; ?></td>
	<td><?PHP echo $row['tel_liv']; ?></td>
	<td><?PHP echo $row['mail_liv']; ?></td>


	<td><form method="POST" action="supprimerLivreur.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_liv']; ?>" name="id_liv">
	</form>
	</td>
	<td><a href="modifierLivreur.php?ID=<?PHP echo $row['id_liv']; ?>">
	Modifier</a></td>

	</tr>
	<?PHP
}
?>
</table>


