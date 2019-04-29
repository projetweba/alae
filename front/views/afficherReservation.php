<?PHP
include "../core/reservationC.php";
$reservation1C=new ReservationC();
$listeReservation=$reservation1C->afficherReservations();

//var_dump($listeReservation->fetchAll());
?>
<table border="1">
<tr>
<td>id_reserv</td>
<td>id_categorie</td>
<td>id_produit</td>
<td>product_name</td>
<td>categorie_name</td>
<td>quantite</td>
</tr>

<?PHP
foreach($listeReservation as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_reserv']; ?></td>
	<td><?PHP echo $row['categorie_name']; ?></td>
	<td><?PHP echo $row['product_name']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
    </tr>
<?PHP
}
?>
</table>


