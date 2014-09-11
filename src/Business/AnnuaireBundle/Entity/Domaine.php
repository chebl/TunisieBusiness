<?php

namespace  Business\AnnuaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domaine
 
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Domaine
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
* @ORM\OneToMany(targetEntity="Business\AnnuaireBundle\Entity\Specialite",
mappedBy="domaine")
    
    */
 private $specialites;
    
    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->datepublication = new \DateTime('now');
        
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->specialites = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Domaine
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
     * @return Domaine
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
     * Add specialites
     *
     * @param \Business\AnnuaireBundle\Entity\Specialite $specialites
     * @return Domaine
     */
    public function addSpecialite(\Business\AnnuaireBundle\Entity\Specialite $specialites)
    {
        $this->specialites[] = $specialites;

        return $this;
    }

    /**
     * Remove specialites
     *
     * @param \Business\AnnuaireBundle\Entity\Specialite $specialites
     */
    public function removeSpecialite(\Business\AnnuaireBundle\Entity\Specialite $specialites)
    {
        $this->specialites->removeElement($specialites);
    }

    /**
     * Get specialites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSpecialites()
    {
        return $this->specialites;
    }
      public function __toString() {
        return $this->getNom();
        ;
    }
}
