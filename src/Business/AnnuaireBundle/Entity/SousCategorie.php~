<?php

namespace  Business\AnnuaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousCategorie
 
 * @ORM\Entity
 */
class SousCategorie
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
     * @var Categorie $categorie
     *
     * @ORM\ManyToOne(targetEntity="Business\AnnuaireBundle\Entity\Categorie")
     */
    private $categorie;
    
     /**
* @ORM\OneToMany(targetEntity="Business\AnnuaireBundle\Entity\Annonce",
mappedBy="souscategorie")
*/
    private $annonces;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->annonces = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return SousCategorie
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
     * @return SousCategorie
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
     * Set categorie
     *
     * @param \ Business\AnnuaireBundle\Entity\Categorie $categorie
     * @return SousCategorie
     */
    public function setCategorie(\ Business\AnnuaireBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \ Business\AnnuaireBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Add annonces
     *
     * @param \ Business\AnnuaireBundle\Entity\Annonce $annonces
     * @return SousCategorie
     */
    public function addAnnonce(\ Business\AnnuaireBundle\Entity\Annonce $annonces)
    {
        $this->annonces[] = $annonces;

        return $this;
    }

    /**
     * Remove annonces
     *
     * @param \ Business\AnnuaireBundle\Entity\Annonce $annonces
     */
    public function removeAnnonce(\ Business\AnnuaireBundle\Entity\Annonce $annonces)
    {
        $this->annonces->removeElement($annonces);
    }

    /**
     * Get annonces
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnnonces()
    {
        return $this->annonces;
    }
}
