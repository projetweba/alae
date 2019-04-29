<?php
include "../config.php";
$db = config::getConnexion();

//delete all info
$sql1 = "DELETE FROM stat WHERE mois = 1;";
$sql2 = "DELETE FROM stat WHERE mois = 2;";
$sql3 = "DELETE FROM stat WHERE mois = 3;";
$sql4 = "DELETE FROM stat WHERE mois = 4;";
$sql5 = "DELETE FROM stat WHERE mois = 5;";
$sql6 = "DELETE FROM stat WHERE mois = 6;";
$sql7 = "DELETE FROM stat WHERE mois = 7;";
$sql8 = "DELETE FROM stat WHERE mois = 8;";
$sql9 = "DELETE FROM stat WHERE mois = 9;";
$sql10 = "DELETE FROM stat WHERE mois = 10;";
$sql11 = "DELETE FROM stat WHERE mois = 11;";
$sql12 = "DELETE FROM stat WHERE mois = 12;";

$result1 = mysql_query($sql1) or die($sql1."<br/><br/>".mysql_error());
$result2 = mysql_query($sql2) or die($sql2."<br/><br/>".mysql_error());
$result3 = mysql_query($sql3) or die($sql3."<br/><br/>".mysql_error());
$result4 = mysql_query($sql4) or die($sql4."<br/><br/>".mysql_error());
$result5 = mysql_query($sql5) or die($sql5."<br/><br/>".mysql_error());
$result6 = mysql_query($sql6) or die($sql6."<br/><br/>".mysql_error());
$result7 = mysql_query($sql7) or die($sql7."<br/><br/>".mysql_error());
$result8 = mysql_query($sql8) or die($sql8."<br/><br/>".mysql_error());
$result9 = mysql_query($sql9) or die($sql9."<br/><br/>".mysql_error());
$result10 = mysql_query($sql10) or die($sql10."<br/><br/>".mysql_error());
$result11 = mysql_query($sql11) or die($sql11."<br/><br/>".mysql_error());
$result12 = mysql_query($sql12) or die($sql12."<br/><br/>".mysql_error());

//count all info

$sql1 = "select COUNT(*) as id_commande from commande WHERE month(dateAchat)=1";
$sql2 = "select COUNT(*) as id_commande from commande WHERE month(dateAchat)=2";
$sql3 = "select COUNT(*) as id_commande from commande WHERE month(dateAchat)=3";
$sql4 = "select COUNT(*) as id_commande from commande WHERE month(dateAchat)=4";
$sql5 = "select COUNT(*) as id_commande from commande WHERE month(dateAchat)=5";
$sql6 = "select COUNT(*) as id_commande from commande WHERE month(dateAchat)=6";
$sql7 = "select COUNT(*) as id_commande from commande WHERE month(dateAchat)=7";
$sql8 = "select COUNT(*) as id_commande from commande WHERE month(dateAchat)=8";
$sql9 = "select COUNT(*) as id_commande from commande WHERE month(dateAchat)=9";
$sql10 = "select COUNT(*) as id_commande from commande WHERE month(dateAchat)=10";
$sql11 = "select COUNT(*) as id_commande from commande WHERE month(dateAchat)=11";
$sql12 = "select COUNT(*) as id_commande from commande WHERE month(dateAchat)=12";

$result1 = mysql_query($sql1) or die($sql1."<br/><br/>".mysql_error());
$result2 = mysql_query($sql2) or die($sql2."<br/><br/>".mysql_error());
$result3 = mysql_query($sql3) or die($sql3."<br/><br/>".mysql_error());
$result4 = mysql_query($sql4) or die($sql4."<br/><br/>".mysql_error());
$result5 = mysql_query($sql5) or die($sql5."<br/><br/>".mysql_error());
$result6 = mysql_query($sql6) or die($sql6."<br/><br/>".mysql_error());
$result7 = mysql_query($sql7) or die($sql7."<br/><br/>".mysql_error());
$result8 = mysql_query($sql8) or die($sql8."<br/><br/>".mysql_error());
$result9 = mysql_query($sql9) or die($sql9."<br/><br/>".mysql_error());
$result10 = mysql_query($sql10) or die($sql10."<br/><br/>".mysql_error());
$result11 = mysql_query($sql11) or die($sql11."<br/><br/>".mysql_error());
$result12 = mysql_query($sql12) or die($sql12."<br/><br/>".mysql_error());


//insert result

$sql1="INSERT INTO Customer (mois, qte) VALUES ('1', $result1)";
$sql2="INSERT INTO Customer (mois, qte) VALUES ('2', $result2)";
$sql3="INSERT INTO Customer (mois, qte) VALUES ('3', $result3)";
$sql4="INSERT INTO Customer (mois, qte) VALUES ('4', $result4)";
$sql5="INSERT INTO Customer (mois, qte) VALUES ('5', $result5)";
$sql6="INSERT INTO Customer (mois, qte) VALUES ('6', $result6)";
$sql7="INSERT INTO Customer (mois, qte) VALUES ('7', $result7)";
$sql8="INSERT INTO Customer (mois, qte) VALUES ('8', $result8)";
$sql9="INSERT INTO Customer (mois, qte) VALUES ('9', $result9)";
$sql10="INSERT INTO Customer (mois, qte) VALUES ('10', $result10)";
$sql11="INSERT INTO Customer (mois, qte) VALUES ('11', $result11)";
$sql12="INSERT INTO Customer (mois, qte) VALUES ('12', $result12)";


?>