<?php

namespace  Business\AnnuaireBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="Business\AnnuaireBundle\Entity\RepPromotionRepository")
 * @ORM\Table(name="reponsespromotions")
 * HasLifecycleCallbacks
 */

class RepPromotion
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
     * @ORM\ManyToOne(targetEntity="Business\AnnuaireBundle\Entity\User",inversedBy="reponsespromotions")
     */
    private $promoteur;

/**
     * @var \DateTime
     *
     * @ORM\Column(name="datepublication", type="datetime")
     */
    private $datepublication;
 
    /**
     *
     * @ORM\ManyToOne(targetEntity="Business\AnnuaireBundle\Entity\Promotion",inversedBy="reponses")
     */
    private $promotion;
  

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
     * @return RepPromotion
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
     * @return RepPromotion
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
     * @return RepPromotion
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
     * @return RepPromotion
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
     * @return RepPromotion
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
     * @return RepPromotion
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
     * @return RepPromotion
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
     * Set promotion
     *
     * @param \Business\AnnuaireBundle\Entity\Promotion $promotion
     * @return RepPromotion
     */
    public function setPromotion(\Business\AnnuaireBundle\Entity\Promotion $promotion = null)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get promotion
     *
     * @return \Business\AnnuaireBundle\Entity\Promotion 
     */
    public function getPromotion()
    {
        return $this->promotion;
    }
}
