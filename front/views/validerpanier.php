<?php 
include "../core/panierC.php";
require_once "../core/employeC.php";
if ($_POST['prixtotale']==0)
{
	header('Location: affichererreur.php');
}
else{
session_start();
$panierC=new panierC();
$panier1C=new panierC();
date_default_timezone_set('UTC');
function checkInput($data)
						{
							$data = trim($data);
							$data = stripslashes($data);
							$data = htmlspecialchars($data);
							return $data;
						}
$d= date("m");
$reference=$d;
$id = checkInput($reference);	
$db = config::getConnexion();
if($id==4){$id="avril";}
	
$statement = $db->prepare("SELECT * FROM stat WHERE mois= ?");
$statement->execute(array($id));
$item = $statement->fetch();

$m=$item['qte'];
echo $m;
$listePaniers=$panier1C->afficherpaniers($_POST['id_utilisateur']);
$produit=NULL;
$db = config::getConnexion();
foreach($db->query('SELECT MAX(id_commande) FROM commande') as $row) {
				$max=$row['MAX(id_commande)'];
				}
				$id_ligne=$max+1;
				
				

foreach($listePaniers as $row)
		{
			
			$produit=$row['id_produit'];
			$qte=$row['qte'];
			
			// function trouve prod par id
			
					 $reference=$row['id_produit'];
					
					 $id = checkInput($reference);
					
					 $db = config::getConnexion();

					 $statement = $db->prepare("SELECT * FROM produit WHERE reference= ?");
					$statement->execute(array($id));
					$item = $statement->fetch();
					$titre = $item['nom'];

					
			//end of function
			$prix=$item['prix']*$row['qte'];
			$panierC->ajouterligne($id_ligne,$produit,$qte,$prix);
		$k++;	
			
		}
		
			
			$panierC->validerpanier($_POST['id_utilisateur'],$id_ligne);
		 
		 //stat etape 1
		 if($d==1)
			{
				$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "zanimobd";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
				$m++;
									$sql = "UPDATE stat SET qte='$m' WHERE mois= 'janvier'";

					if ($conn->query($sql) === TRUE) {
						echo "Record updated successfully";
					} else {
						echo "Error updating record: " . $conn->error;
					}

					$conn->close();
			}
		 else if($d==2)
			{
				$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "zanimobd";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
				$m++;
									$sql = "UPDATE stat SET qte='$m' WHERE mois= 'fevrier'";

					if ($conn->query($sql) === TRUE) {
						echo "Record updated successfully";
					} else {
						echo "Error updating record: " . $conn->error;
					}

					$conn->close();
			}
			else if($d==3)
			{
				$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "zanimobd";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
				$m++;
									$sql = "UPDATE stat SET qte='$m' WHERE mois= 'mars'";

					if ($conn->query($sql) === TRUE) {
						echo "Record updated successfully";
					} else {
						echo "Error updating record: " . $conn->error;
					}

					$conn->close();
			}
			else if($d==4)
			{
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "zanimobd";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
				$m++;
									$sql = "UPDATE stat SET qte='$m' WHERE mois= 'avril'";

					if ($conn->query($sql) === TRUE) {
						echo "Record updated successfully";
					} else {
						echo "Error updating record: " . $conn->error;
					}

					$conn->close();
			}
			else if($d==5)
			{
				$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "zanimobd";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
				$m++;
									$sql = "UPDATE stat SET qte='$m' WHERE mois= 'mai'";

					if ($conn->query($sql) === TRUE) {
						echo "Record updated successfully";
					} else {
						echo "Error updating record: " . $conn->error;
					}

					$conn->close();
			}
			else if($d==6)
			{
				$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "zanimobd";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
				$m++;
									$sql = "UPDATE stat SET qte='$m' WHERE mois= 'juin'";

					if ($conn->query($sql) === TRUE) {
						echo "Record updated successfully";
					} else {
						echo "Error updating record: " . $conn->error;
					}

					$conn->close();
			}
			else if($d==7)
			{
				$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "zanimobd";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
				$m++;
									$sql = "UPDATE stat SET qte='$m' WHERE mois= 'juillet'";

					if ($conn->query($sql) === TRUE) {
						echo "Record updated successfully";
					} else {
						echo "Error updating record: " . $conn->error;
					}

					$conn->close();
			}
			else if($d==8)
			{
				$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "zanimobd";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
				$m++;
									$sql = "UPDATE stat SET qte='$m' WHERE mois= 'aout'";

					if ($conn->query($sql) === TRUE) {
						echo "Record updated successfully";
					} else {
						echo "Error updating record: " . $conn->error;
					}

					$conn->close();
			}
			else if($d==9)
			{
				$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "zanimobd";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
				$m++;
									$sql = "UPDATE stat SET qte='$m' WHERE mois= 'septembre'";

					if ($conn->query($sql) === TRUE) {
						echo "Record updated successfully";
					} else {
						echo "Error updating record: " . $conn->error;
					}

					$conn->close();
			}
			else if($d==10)
			{
				$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "zanimobd";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
				$m++;
									$sql = "UPDATE stat SET qte='$m' WHERE mois= 'octobre'";

					if ($conn->query($sql) === TRUE) {
						echo "Record updated successfully";
					} else {
						echo "Error updating record: " . $conn->error;
					}

					$conn->close();
			}
			else if($d==11)
			{
				$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "zanimobd";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
				$m++;
									$sql = "UPDATE stat SET qte='$m' WHERE mois= 'novembre'";

					if ($conn->query($sql) === TRUE) {
						echo "Record updated successfully";
					} else {
						echo "Error updating record: " . $conn->error;
					}

					$conn->close();
			}
			else if($d==12)
			{
				$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "zanimobd";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
				$m++;
									$sql = "UPDATE stat SET qte='$m' WHERE mois= 'decembre'";

					if ($conn->query($sql) === TRUE) {
						echo "Record updated successfully";
					} else {
						echo "Error updating record: " . $conn->error;
					}

					$conn->close();
			}
		 //envoi mail
		 $db = config::getConnexion();
					$id=$_SESSION['id'];
					$statement = $db->prepare("SELECT * FROM membre WHERE id= ?");
					$statement->execute(array($id));
					$item = $statement->fetch();
					
		  $to = "alaeddinne.ghribi@esprit.tn";
         
		  $subject = "Zanimo : commande";
         
          $message = "<h1>Votre commande a ete enregistrer.</h1>";
		 
          $header = "From:alaeddinne.ghribi@esprit.tn \r\n";
          $header .= $item['mail'];
          $header .= "MIME-Version: 1.0\r\n";
          $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
	
		header('Location: afficherpanier.php');


}