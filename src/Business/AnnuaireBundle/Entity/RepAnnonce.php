<?php

namespace  Business\AnnuaireBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="Business\AnnuaireBundle\Entity\RepAnnonceRepository")
 * @ORM\Table(name="reponsesannonces")
 * HasLifecycleCallbacks
 */

class RepAnnonce
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
     * @ORM\Column(name="prenom", type="string",length=255)
     */
  private $prenom;
  /**
     * @var string
     *
     * @ORM\Column(name="email", type="string",length=255)
     */
private $email;

/**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string",length=255,nullable=true)
     */
  private $telephone;

/**
     * @var string
     *
     * @ORM\Column(name="message", type="string",length=255,nullable=true)
     */  private $message;
 
   /**
     *
     * @ORM\ManyToOne(targetEntity="Business\AnnuaireBundle\Entity\User",inversedBy="reponsesannonces")
     */
    private $annonceur;
   /**
     *
     * @ORM\ManyToOne(targetEntity="Business\AnnuaireBundle\Entity\Annonce",inversedBy="reponses")
     */
    private $annonce;

    
/**
     * @var \DateTime
     *
     * @ORM\Column(name="datepublication", type="datetime")
     */
    private $datepublication;
 

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
     * @return RepAnnonce
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
     * @return RepAnnonce
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
     * Set email
     *
     * @param string $email
     * @return RepAnnonce
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return RepAnnonce
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
     * Set message
     *
     * @param string $message
     * @return RepAnnonce
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set datepublication
     *
     * @param \DateTime $datepublication
     * @return RepAnnonce
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
     * Set annonceur
     *
     * @param \Business\AnnuaireBundle\Entity\User $annonceur
     * @return RepAnnonce
     */
    public function setAnnonceur(\Business\AnnuaireBundle\Entity\User $annonceur = null)
    {
        $this->annonceur = $annonceur;

        return $this;
    }

    /**
     * Get annonceur
     *
     * @return \Business\AnnuaireBundle\Entity\User 
     */
    public function getAnnonceur()
    {
        return $this->annonceur;
    }

    /**
     * Set annonce
     *
     * @param \Business\AnnuaireBundle\Entity\Annonce $annonce
     * @return RepAnnonce
     */
    public function setAnnonce(\Business\AnnuaireBundle\Entity\Annonce $annonce = null)
    {
        $this->annonce = $annonce;

        return $this;
    }

    /**
     * Get annonce
     *
     * @return \Business\AnnuaireBundle\Entity\Annonce 
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }
}
