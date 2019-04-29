<?PHP
include "../core/reservationC.php";

$ReservationC=new reservationC();

if (isset($_POST["id_reserv"]))
{
	$ReservationC->supprimerReservation($_POST['id_reserv']);
	header('Location: reservation.php');
}
else 
{
	echo "erreur";
}

?>