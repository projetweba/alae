<?php
	class wishlist
	{
		private $id_utilisateur;
		private $id_prod;
		function __construct($id_produit){
		$this->id_produit=$id_produit;
	}
		public function get_id_utilisateur()
		{
			return $this->id_utilisateur;
		}

		public function get_id_prod()
		{
			return $this->id_prod;
		}
	}
?>