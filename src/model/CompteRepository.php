<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
namespace src\model; 

use libs\system\Model; 
	
class CompteRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	/*public function getCompte($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Compte')->find(array('id' => $id));
		}
	}*/
	
	public function addCompte($compte)
	{
		if($this->db != null)
		{
			$this->db->persist($compte);
			$this->db->flush();

			return $compte->getId();
		}
	}
	
	/*public function deleteCompte($id){
		if($this->db != null)
		{
			$test = $this->db->find('compte', $id);
			if($test != null)
			{
				$this->db->remove($test);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}*/
	
	/*public function updateCompte($compte){
		if($this->db != null)
		{
			$getCompte = $this->db->find('Test', $compte->getId());
			if($getCompte != null)
			{
				$getCompte->setFrais($compte->getFrais());
				$getCompte->setAgence($compte->getAgence());

				$this->db->flush();

			}else {
				die("Objet ".$test->getId()." does not existe!!");
			}	
		}
	}*/
	
	/*public function listeCompte(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM Compte t")->getResult();
		}
	}*/
	
/*	public function listeCompteById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Compte')->findBy(array('id' => $id));
		}
	}*/
	
/*	public function listeCompteById($id)
	{
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM compte t WHERE t.id = " . $id)->getSingleResult();
		}
	}*/

	/*public function listeOfCompte()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Compte')->findAll();
		}
	}*/
	
}