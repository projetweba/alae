<?PHP
include "../config.php";
class CommandeC {
function afficherCommande ($commande){
		echo "L'identifiant du commande: ".$commande->getidc()."<br>";
		echo "L'identifiant du client: ".$commande->getidu()."<br>";
		echo "Date d'achat: ".$commande->getda()."<br>";
		echo "Les produit achetes: ".$commande->getta()."<br>";
		echo "Valide: ".$commande->getvalide()."<br>";
	}
	function ajoutercommande($commande){
		$sql="insert into Commande (id_commande,id_utilisateur,dateAchat,tabAchats,valide) values (:id_commande,:id_utilisateur,:dateAchat,:tabAchats,:valide)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_commande=$commande->getidc();
        $id_utilisateur=$commande->getidu();
        $dateAchat=$commande->getda();
        $tabAchats=$commande->getta();
        $valide=$commande->getvalide();
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercommandes(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.cin= a.cin";
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function affichernom($id_utilisateur)
	{
		$sql="SElECT nom From membre where id= $id_utilisateur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercommande($id_commande){
		$sql="DELETE FROM Commande where id_commande=:id_commande";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_commande',$id_commande);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercommande($id_commande)
	{
		$valide=1;
		$sql="UPDATE commande SET valide= :valide WHERE id_commande= :id_commande";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		
        $req=$db->prepare($sql);
        $req->bindvalue(':id_commande',$id_commande);
		$req->bindValue(':valide',$valide);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	function recupererCommande($id_commande){
		$sql="SELECT * from Commande where id_commande=$id_commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function validerCommande($id_commande)
	{
		$sql="UPDATE commande SET valide=:1 WHERE id_commande=:id_commande";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		try{
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	function afficherligne($id_ligne){
		
		$sql="SElECT * From ligne_commande where id_ligne=$id_ligne";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
}

?>