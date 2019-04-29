<?PHP

include "../core/reservationC.php";
include "../entities/reservation.php";
?>

<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Z'animo Reservation-ADMIN</title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/meanmenu.min.css">
<link rel="stylesheet" href="assets/plugins/morris/morris.css">

</head>
<body>


<?php
if (isset($_GET['id_reserv'])){
	$reservationC=new reservationC();
    $result=$reservationC->recupererReservation($_GET['id_reserv']);
	foreach($result as $row){
		$id_reserv=$row['id_reserv'];
		$categorie_name=$row['categorie_name'];
		$product_name=$row['product_name'];
		$quantite=$row['quantite'];
		$description=$row['description'];

?>

<?PHP
	}
}
if (isset($_POST['modif'])){
	$Reservation=new reservation($_POST['id_reserv'],$_POST['categorie_name'],$_POST['product_name'],$_POST['quantite'],$_POST['description']);
	$reservationC->modifierReservation($Reservation,$_POST['id_reserv_ini']);
	echo $_POST['id_reserv_ini'];
	header('Location: reservation.php');
}
?>

<form name="hey" class="forms-sample" method="POST">
<div class="card-header">
<h4 class="card-title">Modifier une reservation</h4>
</div>

<div class="form-group">
<label for="exampleInputName1">ID</label>
<input type="number"  class="form-control" " name="id_reserv"  value="<?PHP echo $id_reserv?>">
</div>

<div class="form-group">
<label for="exampleInputEmail2">Categorie</label>
<input type="text" class="form-control"  name="categorie_name" value="<?PHP echo $categorie_name?>">
</div>

<div class="form-group">
<label for="exampleInputEmail3">Product</label>
<input type="text" class="form-control"  name="product_name" value="<?PHP echo $product_name?>">
</div>

<div class="form-group">
<label for="exampleInputEmail4">Quantite</label>
<input type="number" class="form-control"  name="quantite" value="<?PHP echo $quantite?>">
</div>

<div class="form-group">
<label for="exampleInputEmail4">Description</label>
<input type="text" class="form-control"  name="description" value="<?PHP echo $description?>">
</div>

<button type="submit" name="modif"   value="modif"  class="btn btn-common mr-3">modifier</button>
<button class="btn btn-common mr-3">Cancel</button>

<div>
<input  type="hidden" name="id_reserv_ini" value="<?PHP echo $_GET['id_reserv'];?>">
</div>
</form>




<footer class="content-footer">
<div class="footer">
<div class="copyright">
<span>Copyright © 2019. All Right Reserved by Z'animo</span>
<span class="go-right">
<a href="#" class="text-gray">Term &amp; Conditions</a>
<a href="#" class="text-gray">Privacy &amp; Policy</a>
</span>
</div>
</div>
</footer>

</div>

</div>
</div>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.app.js"></script>
<script src="assets/js/main.js"></script>

<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>
<script src="assets/js/dashborad2.js"></script>
</body>

</html>