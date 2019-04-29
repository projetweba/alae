<?php
$connect = mysqli_connect("localhost", "root", "", "zanimobd");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM ligne_commande 
	WHERE id LIKE '%".$search."%'
	OR id_ligne LIKE '%".$search."%' 
	OR id_produit LIKE '%".$search."%' 
	OR qte LIKE '%".$search."%' 
	OR prix LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM ligne_commande ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>identifiant</th>
							<th>identifiant du commande</th>
							<th>identifiant du produit</th>
							<th>quantite</th>
							<th>prix</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["id_ligne"].'</td>
				<td>'.$row["id_produit"].'</td>
				<td>'.$row["qte"].'</td>
				<td>'.$row["prix"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>