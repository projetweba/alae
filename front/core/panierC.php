<?PHP
include "../config.php";
class panierC {
						 //$id_utilisateur,$produit
	function ajouterPanier($id_utilisateur,$id_produit,$qte){
		
		
		
		
		$sql="insert into panier (id_utilisateur,id_produit,qte) values (:id_utilisateur , :id_produit ,:qte)";
		$db = config::getConnexion();
		try
		{
		
        $req=$db->prepare($sql);
		$req->bindvalue(':id_utilisateur',$id_utilisateur);
		$req->bindvalue(':id_produit',$id_produit);
		$req->bindvalue(':qte',$qte);
            $req->execute();
           
        }
        catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
							//$id_utilisateur
	function afficherpaniers($id_utilisateur)
	{
														//$id_utilisateur
		$sql="SElECT * From Panier where id_utilisateur=$id_utilisateur";
		
		$db = config::getConnexion();
		try{
			
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
							//$id_utilisateur
	function supprimerProduit($id_utilisateur,$id_produit)
	{
		$sql="DELETE FROM Panier where id_produit= :id_produit AND id_utilisateur=:id_utilisateur";
		$db = config::getConnexion();
        
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':id_produit',$id_produit);
			$req->bindValue(':id_utilisateur',$id_utilisateur);
            $req->execute();
        }
        catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerPanier($id_utilisateur)
	{
		$sql="DELETE FROM Panier where id_utilisateur= :id_utilisateur";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_utilisateur',$id_utilisateur);
		try
		{
            $req->execute();
        }
        catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListepaniers($id_utilisateur){
		$sql="SELECT * from panier where id_utilisateur=$id_utilisateur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function validerpanier($id_utilisateur,$id_ligne)
	{
		
		$sql="insert into commande (id_utilisateur,id_ligne,dateAchat) values (:id_utilisateur , :tabAchats,CURDATE())";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$req->bindvalue(':id_utilisateur',$id_utilisateur);
		$req->bindparam(':tabAchats',$id_ligne);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function ajouterligne($id_ligne,$produit,$qte,$prix)
	{
		
		$sql="insert into ligne_commande (id_ligne,id_produit,qte,prix) values (:id_ligne , :id_produit, :qte, :prix)";
		$db = config::getConnexion();
		
		try{
        $req=$db->prepare($sql);
		$req->bindvalue(':id_ligne',$id_ligne);
		$req->bindvalue(':id_produit',$produit);
		$req->bindvalue(':qte',$qte);
		$req->bindvalue(':prix',$prix);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	
}

?>