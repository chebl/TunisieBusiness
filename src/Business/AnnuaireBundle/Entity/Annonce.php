<?php

namespace  Business\AnnuaireBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="Business\AnnuaireBundle\Entity\AnnonceRepository")
 * @ORM\Table(name="annonce")
 * @ORM\HasLifecycleCallbacks
 */

class Annonce
{
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string",length=255)
     */
  private $titre;
   /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
  private $description;
  /**
     * @var string
     *
     * @ORM\Column(name="dureevalidite", type="text")
     */
private $dureevalidite;

/**
     * @var string
     *
     * @ORM\Column(name="lieu", type="text",nullable=true)
     */
  private $lieu;
/**
     * @var Integer
     *
     * @ORM\Column(name="prix", type="integer")
     */
  private $prix;
 /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;
      /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;
   /**
     *
     * @ORM\ManyToOne(targetEntity="Business\AnnuaireBundle\Entity\User",inversedBy="annonces")
     */
    private $annonceur;

/**
     * @var \DateTime
     *
     * @ORM\Column(name="datepublication", type="datetime")
     */
    private $datepublication;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;
/**
     *
     * @ORM\ManyToOne(targetEntity="Business\AnnuaireBundle\Entity\SousCategorie",inversedBy="annonces")
     */
    private $souscategorie;

/**
* @ORM\OneToMany(targetEntity="Business\AnnuaireBundle\Entity\RepAnnonce",
mappedBy="annonce")
*/  
private $reponses;    
   
    
     //les 4 fonctions suivantes sont pour le upload
    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }
     
    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }
     
    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__.'/../../../../web/bundles/businessannuaire/'.$this->getUploadDir();
    }
     
    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/annonces/images';
    }
     
    // **** les 3 fonctions suivantes servent à gérer le callback et l'upload de file
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        var_dump($this->file);
         
        if (null !== $this->file) {
            // do whatever you want to generate a unique name
            $this->path = uniqid().'.'.$this->file->guessExtension();
        }
    }
     
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }
          
        // ** on peut mettre ça si on veut faire que le nom corresponde au nom de l'image original
        //$this->setName($this->file->getClientOriginalName());
     
        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        //$this->file->move($this->getUploadRootDir(), $this->path);
     $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
     $this->path = $this->file->getClientOriginalName(); 
     $this->file = null;
    }
     
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
    

    
    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->datepublication = new \DateTime('now');
        $this->updated = new \DateTime('now');
        
        
    }
    
    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        $this->updated = new \DateTime('now');
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
     * Set titre
     *
     * @param string $titre
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set dureevalidite
     *
     * @param string $dureevalidite
     * @return Annonce
     */
    public function setDureevalidite($dureevalidite)
    {
        $this->dureevalidite = $dureevalidite;

        return $this;
    }

    /**
     * Get dureevalidite
     *
     * @return string 
     */
    public function getDureevalidite()
    {
        return $this->dureevalidite;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Annonce
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Annonce
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set datepublication
     *
     * @param \DateTime $datepublication
     * @return Annonce
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
     * Set updated
     *
     * @param \DateTime $updated
     * @return Annonce
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set annonceur
     *
     * @param \ Business\AnnuaireBundle\Entity\User $annonceur
     * @return Annonce
     */
    public function setAnnonceur(\ Business\AnnuaireBundle\Entity\User $annonceur = null)
    {
        $this->annonceur = $annonceur;

        return $this;
    }

    /**
     * Get annonceur
     *
     * @return \ Business\AnnuaireBundle\Entity\User 
     */
    public function getAnnonceur()
    {
        return $this->annonceur;
    }

    /**
     * Set souscategorie
     *
     * @param \ Business\AnnuaireBundle\Entity\SousCategorie $souscategorie
     * @return Annonce
     */
    public function setSouscategorie(\ Business\AnnuaireBundle\Entity\SousCategorie $souscategorie = null)
    {
        $this->souscategorie = $souscategorie;

        return $this;
    }

    /**
     * Get souscategorie
     *
     * @return \ Business\AnnuaireBundle\Entity\SousCategorie 
     */
    public function getSouscategorie()
    {
        return $this->souscategorie;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reponses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reponses
     *
     * @param \Business\AnnuaireBundle\Entity\RepAnnonce $reponses
     * @return Annonce
     */
    public function addReponse(\Business\AnnuaireBundle\Entity\RepAnnonce $reponses)
    {
        $this->reponses[] = $reponses;

        return $this;
    }

    /**
     * Remove reponses
     *
     * @param \Business\AnnuaireBundle\Entity\RepAnnonce $reponses
     */
    public function removeReponse(\Business\AnnuaireBundle\Entity\RepAnnonce $reponses)
    {
        $this->reponses->removeElement($reponses);
    }

    /**
     * Get reponses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReponses()
    {
        return $this->reponses;
    }
}
