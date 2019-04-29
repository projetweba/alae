<?PHP

include "../core/LivraisonC.php";
include "../entities/livraison.php";
?>

<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Z'animo Livreur-ADMIN</title>

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
if (isset($_GET['id_livraison'])){
	$LivraisonC=new LivraisonC();
    $result=$LivraisonC->recupererLivraison($_GET['id_livraison']);
	foreach($result as $row){
		$id_livraison=$row['id_livraison'];
		$id_livreur=$row['id_livreur'];
		$adresse=$row['adresse'];
		$ville=$row['ville'];
		$code_postal=$row['code_postal'];
		$date_livraison=$row['date_livraison'];

?>
<?PHP
	}
}
if (isset($_POST['modif'])){
	$Livraison=new livraison($_POST['id_livraison'],$_POST['id_livreur'],$_POST['adresse'],$_POST['ville'],$_POST['code_postal'],$_POST['date_livraison']);
	$LivraisonC->modifierLivraison($Livraison,$_POST['id_livraison_ini']);
	echo $_POST['id_livraison_ini'];
	header('Location: livraison.php');
}
?>


<form name="hey" class="forms-sample" method="POST">
<div class="card-header">
<h4 class="card-title">Modifier une Livraison</h4>
</div>

<div class="form-group">
<label for="exampleInputName1">ID Livraison</label>
<input type="number"  class="form-control" " name="id_livraison"  value="<?PHP echo $id_livraison?>">
</div>

<div class="form-group">
<label for="exampleInputEmail2">ID Livreur</label>
<input type="number" class="form-control"  name="id_livreur" value="<?PHP echo $id_livreur?>">
</div>

<div class="form-group">
<label for="exampleInputEmail3">Adress</label>
<input type="text" class="form-control"  name="adresse" value="<?PHP echo $adresse?>">
</div>

<div class="form-group">
<label for="exampleInputEmail4">Ville</label>
<input type="text" class="form-control"  name="ville" value="<?PHP echo $ville?>">
</div>

<div class="form-group">
<label for="exampleInputEmail3">Code Postal</label>
<input type="number" class="form-control"  name="code_postal" value="<?PHP echo $code_postal?>">
</div>

<div class="form-group">
<label for="exampleInputEmail4">Date Livraison</label>
<input type="date" class="form-control"  name="date_livraison" value="<?PHP echo $date_livraison?>">
</div>



<button type="submit" name="modif"   value="modif"  class="btn btn-common mr-3">modifier</button>
<button class="btn btn-common mr-3">Cancel</button>

<div>
<input  type="hidden" name="id_livraison_ini" value="<?PHP echo $_GET['id_livraison'];?>">
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