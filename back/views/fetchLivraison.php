<?PHP
$connect = mysqli_connect("localhost", "root", "", "zanimobd");

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM livraison 
  WHERE id_livraison LIKE '%".$search."%'
  OR id_livreur LIKE '%".$search."%' 
  OR adresse LIKE '%".$search."%' 
  OR ville LIKE '%".$search."%'
  OR code_postal LIKE '%".$search."%'
  OR date_livraison LIKE '%".$search."%'


 
 ";
}
else
{
 $query = "
  SELECT * FROM livraison ORDER BY id_livraison
 ";
}
$result = mysqli_query($connect, $query);


//var_dump($listeEmployes->fetchAll());
?>
<div class="table-overflow">
<table class="table table-hover table-lg">

<thead>
<tr>
<td class="text-dark text-semibold">ID Livraison</td>
<td class="text-dark text-semibold">ID Livreur</td>
<td class="text-dark text-semibold">Adresse</td>
<td class="text-dark text-semibold">Ville</td>
<td class="text-dark text-semibold">Code postal</td>
<td class="text-dark text-semibold">Date livraison</td>
<td class="text-dark text-semibold">Suppression</td>
<td class="text-dark text-semibold">Modification</td>

</tr>
</thead>


<?PHP
while($row = mysqli_fetch_array($result)){
  ?>
  <tr>
  <td class="text-dark text-semibold"><?PHP echo $row['id_livraison']; ?></td>
  <td class="text-dark text-semibold"><?PHP echo $row['id_livreur']; ?></td>
  <td class="text-dark text-semibold"><?PHP echo $row['adresse']; ?></td>
  <td class="text-dark text-semibold"><?PHP echo $row['ville']; ?></td>
  <td class="text-dark text-semibold"><?PHP echo $row['code_postal']; ?></td>
  <td class="text-dark text-semibold"><?PHP echo $row['date_livraison']; ?></td>


  <td><form method="POST" action="supprimerLivraison.php">
  
  <button type="submit" name="supprimer"   value="supprimer"  class="btn btn-common mr-3">supprimer</button>
  <input type="hidden" value="<?PHP echo $row['id_livraison']; ?>" name="id_livraison">
  </form>
  </td>

  <td><a href="modifierLivraison.php?id_livraison=<?PHP echo $row['id_livraison'];?>">Modifier</a></td>
  
  
  
  </tr>
  <?PHP
}
?>
</div>
</table>
</div>





