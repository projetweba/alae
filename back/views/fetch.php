<?PHP
$connect = mysqli_connect("localhost", "root", "", "zanimobd");

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM produit 
  WHERE nom LIKE '%".$search."%'
  OR categorie LIKE '%".$search."%' 
 
 ";
}
else
{
 $query = "
  SELECT * FROM produit ORDER BY reference
 ";
}
$result = mysqli_query($connect, $query);


//var_dump($listeEmployes->fetchAll());
?>

<table  border="1">
<tr>
<th>Référence</th>
<th>Nom Du Produit</th>
<th>Categorie</th>
<th>Prix en DT</th>
<th>Description</th>
<th>image</th>
<th>supprimer</th>
<th>modifier</th>
</tr>

<?PHP
while($row = mysqli_fetch_array($result)){
  ?>
  <tr>
  <td><?PHP echo $row['reference']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['categorie']; ?></td>
  <td><?PHP echo $row['prix']; ?></td>
  <td><?PHP echo $row['description']; ?></td>
           <?PHP echo '                  <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="50" width="100" class="img-thumnail" />  
                               </td>  
                           ';?>
                    
  <td><form method="POST" action="supprimerEmploye.php">
  
  <button type="submit" name="supprimer"   value="supprimer"  class="btn btn-common mr-3">supprimer</button>
  <input type="hidden" value="<?PHP echo $row['reference']; ?>" name="reference">
  </form>
  </td>

  <td><a href="form-elements2.php?reference=<?PHP echo $row['reference'];?>">Modifier</a></td>
  </tr>
  <?PHP
}
?>






