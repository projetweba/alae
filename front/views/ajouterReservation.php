<?PHP
include "../entities/reservation.php";
include "../core/reservationC.php";

if (isset($_POST['categorie_name']) and isset($_POST['product_name']) and isset($_POST['quantite']) and isset($_POST['description']) )
{
		$reservation1=new reservation($_POST['id_reserv'],$_POST['categorie_name'],$_POST['product_name'],$_POST['quantite'],$_POST['description']);
		

$reservation1C=new reservationC();
$reservation1C->ajouterReservation($reservation1);
header('Location: Reserv.html');	
}
else
{
	echo "Champs";
}

?>