<?php

namespace  Business\AnnuaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    /**
     * @var datetime
     *
     * @ORM\Column(name="DatePublication", type="datetime")
     */
    private $datepublication;

     /**
* @ORM\OneToMany(targetEntity="Business\AnnuaireBundle\Entity\SousCategorie",
mappedBy="categorie")
    
    */
 private $souscategories;
    
         


    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->datepublication = new \DateTime('now');
               
        
    }
        
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Categorie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set datepublication
     *
     * @param \DateTime $datepublication
     * @return Categorie
     */
    public function setDatepublication($datepublication)
    {
        $this->datepublication = $datepublication;
    
        return $this;
    }

    /**
     * Get datepublication
     *
     * @return \DateTime 
     */
    public function getDatepublication()
    {
        return $this->datepublication;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->souscategories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add souscategories
     *
     * @param \ Business\AnnuaireBundle\Entity\SousCategorie $souscategories
     * @return Categorie
     */
    public function addSouscategory(\ Business\AnnuaireBundle\Entity\SousCategorie $souscategories)
    {
        $this->souscategories[] = $souscategories;

        return $this;
    }

    /**
     * Remove souscategories
     *
     * @param \ Business\AnnuaireBundle\Entity\SousCategorie $souscategories
     */
    public function removeSouscategory(\ Business\AnnuaireBundle\Entity\SousCategorie $souscategories)
    {
        $this->souscategories->removeElement($souscategories);
    }

    /**
     * Get souscategories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSouscategories()
    {
        return $this->souscategories;
    }
}
