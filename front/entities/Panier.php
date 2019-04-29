<?PHP
class panier{
	private $id_panier;
	private $id_utilisateur;
	private $id_produit;
	private $qte;
	function __construct($id_produit,$qte){
		$this->id_produit=$id_produit;
		$this->qte=$qte;
	}
	public function get_id_produit()
		{
			return $this->id_produit;
		}

	public function get_qte()
	{
		return $this->qte;
	}	
}

?>