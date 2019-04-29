<?PHP
$connect = mysqli_connect("localhost", "root", "", "zanimobd");

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM livreur 
  WHERE prenom_liv LIKE '%".$search."%'
  OR id_liv LIKE '%".$search."%' 
  OR adresse_liv LIKE '%".$search."%' 
  OR tel_liv LIKE '%".$search."%' 
  OR mail_liv LIKE '%".$search."%'  
 
 ";
}
else
{
 $query = "
  SELECT * FROM livreur ORDER BY id_liv
 ";
}
$result = mysqli_query($connect, $query);


//var_dump($listeEmployes->fetchAll());
?>
<div class="table-overflow">
<table class="table table-hover table-lg">



<thead>
<tr>
<td class="text-dark text-semibold">ID</td>
<td class="text-dark text-semibold">Nom</td>
<td class="text-dark text-semibold">Adresse</td>
<td class="text-dark text-semibold">Téléphone</td>
<td class="text-dark text-semibold">Mail</td>
<td class="text-dark text-semibold">Suppression</td>
<td class="text-dark text-semibold">Modification</td>
</tr>
</thead>


<?PHP
while($row = mysqli_fetch_array($result)){
  ?>
  <tr>
  <td class="text-dark text-semibold"><?PHP echo $row['id_liv']; ?></td>
  <td class="text-dark text-semibold"><?PHP echo $row['prenom_liv']; ?></td>
  <td class="text-dark text-semibold"><?PHP echo $row['adresse_liv']; ?></td>
  <td class="text-dark text-semibold"><?PHP echo $row['tel_liv']; ?></td>
  <td class="text-dark text-semibold"><?PHP echo $row['mail_liv']; ?></td>
           
                    
  <td><form method="POST" action="supprimerLivreur.php">
  
  <button type="submit" name="supprimer"   value="supprimer"  class="btn btn-danger btn-rounded">supprimer</button>
  <input type="hidden" value="<?PHP echo $row['id_liv']; ?>" name="id_liv">
  </form>
  </td>

  <td><a href="mod1.php?id_liv=<?PHP echo $row['id_liv'];?>">Modifier</a></td>
  </tr>
  <?PHP
}
?>
</div>
</table>
</div>





