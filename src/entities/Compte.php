<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="Compte")
 **/
class Compte
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
      private $frais;
    /** @Column(type="string") **/
    private $agence;
    /** @Column(type="decimal") **/
    private $rib;
    /** @Column(type="string") **/
    private $num_compte;


    /**
     * Many compte have one client. This is the owning side.
     * @ManyToOne(targetEntity="client", inversedBy="compte")
     * @JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;
    
    public function __construct()
    {

    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

   

      /**
       * Get the value of frais
       */ 
      public function getFrais()
      {
            return $this->frais;
      }

      /**
       * Set the value of frais
       */ 
      public function setFrais($frais)
      {
            $this->frais = $frais;
      }

    /**
     * Get the value of agence
     */ 
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * Set the value of agence
     *
     * @return  self
     */ 
    public function setAgence($agence)
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * Get the value of rib
     */ 
    public function getRib()
    {
        return $this->rib;
    }

    /**
     * Set the value of rib
     *
     * @return  self
     */ 
    public function setRib($rib)
    {
        $this->rib = $rib;

        return $this;
    }

    /**
     * Get the value of num_compte
     */ 
    public function getNum_compte()
    {
        return $this->num_compte;
    }

    /**
     * Set the value of num_compte
     *
     * @return  self
     */ 
    public function setNum_compte($num_compte)
    {
        $this->num_compte = $num_compte;

        return $this;
    }

    /**
     * Get many compte have one client. This is the owning side.
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set many compte have one client. This is the owning side.
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }
}

?>