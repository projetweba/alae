<?PHP

include "../core/LivreurC.php";
include "../entities/livreur.php";
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
if (isset($_GET['id_liv'])){
	$LivreurC=new LivreurC();
    $result=$LivreurC->recupererLivreur($_GET['id_liv']);
	foreach($result as $row){
		$id_liv=$row['id_liv'];
		$prenom_liv=$row['prenom_liv'];
		$adresse_liv=$row['adresse_liv'];
		$tel_liv=$row['tel_liv'];
		$mail_liv=$row['mail_liv'];

?>

<?PHP
	}
}
if (isset($_POST['modif'])){
	$Livreur=new livreur($_POST['id_liv'],$_POST['prenom_liv'],$_POST['adresse_liv'],$_POST['tel_liv'],$_POST['mail_liv']);
	$LivreurC->modifierLivreur($Livreur,$_POST['id_liv_ini']);
	echo $_POST['id_liv_ini'];
	header('Location: livreur.php');
}
?>

<form name="hey" class="forms-sample" method="POST">
<div class="card-header">
<h4 class="card-title">Modifier un Livreur</h4>
</div>

<div class="form-group">
<label for="exampleInputName1">ID</label>
<input type="text"  class="form-control" " name="id_liv" onblur=" verifname(this)" value="<?PHP echo $id_liv?>">
</div>

<div class="form-group">
<label for="exampleInputEmail2">Nom</label>
<input type="text" class="form-control"  name="prenom_liv" onblur=" verifname(this)" value="<?PHP echo $prenom_liv?>">
</div>

<div class="form-group">
<label for="exampleInputEmail2">Adresse</label>
<input type="text" class="form-control"  name="adresse_liv" onblur=" verifname(this)" value="<?PHP echo $adresse_liv?>">
</div>

<div class="form-group">
<label for="exampleInputEmail3">Tel</label>
<input type="text" class="form-control"  name="tel_liv" onblur=" verifname(this)" value="<?PHP echo $tel_liv?>">
</div>

<div class="form-group">
<label for="exampleInputEmail4">Mail</label>
<input type="text" class="form-control"  name="mail_liv" onblur=" verifname(this)" value="<?PHP echo $mail_liv?>">
</div>

<button type="submit" name="modif"   value="modif"  class="btn btn-common mr-3">modifier</button>
<button class="btn btn-common mr-3">Cancel</button>

<div>
<input  type="hidden" name="id_liv_ini" value="<?PHP echo $_GET['id_liv'];?>">
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