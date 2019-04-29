<?PHP
class Commande{
	private $id_commande;
	private $id_utilisateur;
	private $dateAchat;
	private $tabAchats;
	private $valide;
	function __construct($id_commande,$id_utilisateur,$dateAchat,$tabAchats,$valide)
	{
		$this->id_commande=$id_commande;
		$this->id_utilisateur=$id_utilisateur;
		$this->dateAchat=$dateAchat;
		$this->tabAchats=$tabAchats;
		$this->valide=$valide;
	}
	
	function getidc(){
		return $this->id_commande;
	}
	function getidu(){
		return $this->id_utilisateur;
	}
	function getda(){
		return $this->dateAchat;
	}
	function getta(){
		return $this->tabAchats;
	}
	function getvalide(){
		return $this->valide;
	}

	function setidc($id_commande){
		$this->id_commande=$id_commande;
	}
	function setidu($id_utilisateur){
		$this->id_utilisateur=$id_utilisateur;
	}
	function setda($dateAchat){
		$this->dateAchat=$dateAchat;
	}
	function setta($tabAchats){
		$this->tabAchats=$tabAchats;
	}
	function setvalide($valide){
		$this->valide=$valide;
	}
	
}

?>