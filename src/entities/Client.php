<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="client")
 **/
class Client
{
/** @Id @Column(type="integer") @GeneratedValue **/
private $id;
/** @Column(type="string") **/
private $nom;
/** @Column(type="string") **/
private $prenom;
/** @Column(type="string") **/
private $adresse;
/** @Column(type="string") **/
private $email;
 /** @Column(type="string") **/
 private $telephone;
/** @Column(type="integer") **/
private $salaire;
/** @Column(type="string") **/
private $profession;



     
    /**
     * One client has many compte. This is the inverse side.
     * @OneToMany(targetEntity="compte", mappedBy="client")
     */
    
    private $compte;
    
    public function __construct()
    {
        $this->client = new ArrayCollection();
    }
        public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
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

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telephone
    */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
    *
    * @return  self
    */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get the value of profession
     */ 
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set the value of profession
     *
     * @return  self
     */ 
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get many client have one compte. This is the owning side.
     */ 
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set many client have one compte. This is the owning side.
     *
     * @return  self
     */ 
    public function setCompte($compte)
    {
        $this->compte = $compte;

        return $this;
    }


/**
 * Get the value of prenom
 */ 
public function getPrenom()
{
return $this->prenom;
}

/**
 * Set the value of prenom
 *
 * @return  self
 */ 
public function setPrenom($prenom)
{
$this->prenom = $prenom;

return $this;
}
    }


    ?>
        