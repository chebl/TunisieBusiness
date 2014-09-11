<?php

namespace  Business\AnnuaireBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="Business\AnnuaireBundle\Entity\PromotionRepository")
 * @ORM\Table(name="promotion")
 * @ORM\HasLifecycleCallbacks
 */

class Promotion
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
     * @ORM\Column(name="nom", type="string",length=255)
     */
  private $nom;
   /**
     * @var string
     *
     * @ORM\Column(name="prenom",type="string",length=255)
     */
  private $prenom;
  /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string",length=255)
     */
private $titre;

/**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string",length=255)
     */
  private $telephone;
/**
     * @var text
     *
     * @ORM\Column(name="description", type="text")
     */
  private $description;

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
     * @ORM\ManyToOne(targetEntity="Business\AnnuaireBundle\Entity\User",inversedBy="promotions")
     */
    private $promoteur;

/**
     * @var \DateTime
     *
     * @ORM\Column(name="datepublication", type="datetime")
     */
    private $datepublication;
   /**
* @ORM\OneToMany(targetEntity="Business\AnnuaireBundle\Entity\RepPromotion",
mappedBy="promotion")
*/  
private $reponses;    


    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->datepublication = new \DateTime('now');
               
        
    }
   
    
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
        return 'uploads/promotions/images';
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
     * @return Promotion
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
     * Set prenom
     *
     * @param string $prenom
     * @return Promotion
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Promotion
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
     * Set telephone
     *
     * @param string $telephone
     * @return Promotion
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Promotion
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
     * Set path
     *
     * @param string $path
     * @return Promotion
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
     * @return Promotion
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
     * Set promoteur
     *
     * @param \Business\AnnuaireBundle\Entity\User $promoteur
     * @return Promotion
     */
    public function setPromoteur(\Business\AnnuaireBundle\Entity\User $promoteur = null)
    {
        $this->promoteur = $promoteur;

        return $this;
    }

    /**
     * Get promoteur
     *
     * @return \Business\AnnuaireBundle\Entity\User 
     */
    public function getPromoteur()
    {
        return $this->promoteur;
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
     * @param \Business\AnnuaireBundle\Entity\RepPromotion $reponses
     * @return Promotion
     */
    public function addReponse(\Business\AnnuaireBundle\Entity\RepPromotion $reponses)
    {
        $this->reponses[] = $reponses;

        return $this;
    }

    /**
     * Remove reponses
     *
     * @param \Business\AnnuaireBundle\Entity\RepPromotion $reponses
     */
    public function removeReponse(\Business\AnnuaireBundle\Entity\RepPromotion $reponses)
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
