<?php
namespace  Business\AnnuaireBundle\Entity;
use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="Business\AnnuaireBundle\Entity\UserRepository")
 * @ORM\Table(name="user")
 * @ORM\HasLifecycleCallbacks
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50,nullable=true)
     
     */
    private $nom;
/**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50,nullable=true)
     */
    private $prenom;
  
     /**
     * @var string
     *
     * @ORM\Column(name="typecompte", type="string", length=50,nullable=true)
     
     */
    private $typecompte;
     /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=50,nullable=true)
     
     */
    
    private $telephone;
    
    
/**
     * @var string
     *
     * @ORM\Column(name="nomsociete", type="string", length=50,nullable=true)
     
     */
    
    private $nomsociete;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text",nullable=true)
     
     */
    
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50,nullable=true)
     
     */
    
    
    
    private $adresse;
    
    /**
     * @var string
     *
     * @ORM\Column(name="codepostal", type="string", length=50,nullable=true)
     
     */
    
    private $codepostal;
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50,nullable=true)
     
     */
    
    private $ville;
    
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
     * @var datetime
     *
     * @ORM\Column(name="dateinscription", type="datetime")
     */
    private $dateinscription;
    
   
    
    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->dateinscription = new \DateTime('now');
               
        
    }
    /**
     *
     * @ORM\ManyToOne(targetEntity="Business\AnnuaireBundle\Entity\Specialite",inversedBy="societes")
     */
    private $specialite;
    
    /**
* @ORM\OneToMany(targetEntity="Business\AnnuaireBundle\Entity\Annonce",
mappedBy="annonceur")
*/
private $annonces; 
 /**
* @ORM\OneToMany(targetEntity="Business\AnnuaireBundle\Entity\Promotion",
mappedBy="promoteur")
*/
private $promotions;
  /**
* @ORM\OneToMany(targetEntity="Business\AnnuaireBundle\Entity\RepPromotion",
mappedBy="promoteur")
*/  
private $reponsespromotions;
/**
* @ORM\OneToMany(targetEntity="Business\AnnuaireBundle\Entity\RepAnnonce",
mappedBy="annonceur")
*/  
private $reponsesanonces;
    

    public function __construct()
    {
        $this->dateinscription=new \DateTime();
        
        parent::__construct();
        // your own logic
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
        return 'uploads/logos/images';
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
     * @return User
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
     * @return User
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
     * Set typecompte
     *
     * @param string $typecompte
     * @return User
     */
    public function setTypecompte($typecompte)
    {
        $this->typecompte = $typecompte;

        return $this;
    }

    /**
     * Get typecompte
     *
     * @return string 
     */
    public function getTypecompte()
    {
        return $this->typecompte;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return User
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
     * Add annonces
     *
     * @param \Business\AnnuaireBundle\Entity\Annonce $annonces
     * @return User
     */
    public function addAnnonce(\Business\AnnuaireBundle\Entity\Annonce $annonces)
    {
        $this->annonces[] = $annonces;

        return $this;
    }

    /**
     * Remove annonces
     *
     * @param \Business\AnnuaireBundle\Entity\Annonce $annonces
     */
    public function removeAnnonce(\Business\AnnuaireBundle\Entity\Annonce $annonces)
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

    /**
     * Set nomsociete
     *
     * @param string $nomsociete
     * @return User
     */
    public function setNomsociete($nomsociete)
    {
        $this->nomsociete = $nomsociete;

        return $this;
    }

    /**
     * Get nomsociete
     *
     * @return string 
     */
    public function getNomsociete()
    {
        return $this->nomsociete;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return User
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
     * Set adresse
     *
     * @param string $adresse
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     * @return User
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string 
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return User
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
     * Set dateinscription
     *
     * @param \DateTime $dateinscription
     * @return User
     */
    public function setDateinscription($dateinscription)
    {
        $this->dateinscription = $dateinscription;

        return $this;
    }

    /**
     * Get dateinscription
     *
     * @return \DateTime 
     */
    public function getDateinscription()
    {
        return $this->dateinscription;
    }

    /**
     * Set specialite
     *
     * @param \Business\AnnuaireBundle\Entity\Specialite $specialite
     * @return User
     */
    public function setSpecialite(\Business\AnnuaireBundle\Entity\Specialite $specialite = null)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return \Business\AnnuaireBundle\Entity\Specialite 
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Add promotions
     *
     * @param \Business\AnnuaireBundle\Entity\Promotion $promotions
     * @return User
     */
    public function addPromotion(\Business\AnnuaireBundle\Entity\Promotion $promotions)
    {
        $this->promotions[] = $promotions;

        return $this;
    }

    /**
     * Remove promotions
     *
     * @param \Business\AnnuaireBundle\Entity\Promotion $promotions
     */
    public function removePromotion(\Business\AnnuaireBundle\Entity\Promotion $promotions)
    {
        $this->promotions->removeElement($promotions);
    }

    /**
     * Get promotions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPromotions()
    {
        return $this->promotions;
    }

    /**
     * Add reponsespromotions
     *
     * @param \Business\AnnuaireBundle\Entity\RepPromotion $reponsespromotions
     * @return User
     */
    public function addReponsespromotion(\Business\AnnuaireBundle\Entity\RepPromotion $reponsespromotions)
    {
        $this->reponsespromotions[] = $reponsespromotions;

        return $this;
    }

    /**
     * Remove reponsespromotions
     *
     * @param \Business\AnnuaireBundle\Entity\RepPromotion $reponsespromotions
     */
    public function removeReponsespromotion(\Business\AnnuaireBundle\Entity\RepPromotion $reponsespromotions)
    {
        $this->reponsespromotions->removeElement($reponsespromotions);
    }

    /**
     * Get reponsespromotions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReponsespromotions()
    {
        return $this->reponsespromotions;
    }

    /**
     * Add reponsesanonces
     *
     * @param \Business\AnnuaireBundle\Entity\RepAnnonce $reponsesanonces
     * @return User
     */
    public function addReponsesanonce(\Business\AnnuaireBundle\Entity\RepAnnonce $reponsesanonces)
    {
        $this->reponsesanonces[] = $reponsesanonces;

        return $this;
    }

    /**
     * Remove reponsesanonces
     *
     * @param \Business\AnnuaireBundle\Entity\RepAnnonce $reponsesanonces
     */
    public function removeReponsesanonce(\Business\AnnuaireBundle\Entity\RepAnnonce $reponsesanonces)
    {
        $this->reponsesanonces->removeElement($reponsesanonces);
    }

    /**
     * Get reponsesanonces
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReponsesanonces()
    {
        return $this->reponsesanonces;
    }
}
