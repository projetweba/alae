<?php
include "../core/CommandeC.php";
$commandeC=new commandeC();
$commandeC->modifiercommande($_POST['id_commande']);

header('Location: commande.php');
?>