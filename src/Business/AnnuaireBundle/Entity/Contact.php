<?php

namespace  Business\AnnuaireBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * contact
 
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Contact
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
     * @ORM\Column(name="prenom", type="text")
     */
  private $prenom;
  /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="text")
     */
private $telephone;

/**
     * @var string
     *
     * @ORM\Column(name="email", type="text",nullable=true)
     */
  private $email;
/**
     * @var text
     *
     * @ORM\Column(name="message", type="text")
     */
  private $message;
   /**
     *
     * @ORM\ManyToOne(targetEntity="Business\AnnuaireBundle\Entity\User",inversedBy="messages")
     */
    private $destinataire;

/**
     * @var \DateTime
     *
     * @ORM\Column(name="dateenvoi", type="datetime")
     */
    private $dateenvoi;
    

    
    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->dateenvoi = new \DateTime('now');
               
        
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
     * @return Contact
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
     * @return Contact
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
     * Set telephone
     *
     * @param string $telephone
     * @return Contact
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
     * Set email
     *
     * @param string $email
     * @return Contact
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
     * Set message
     *
     * @param string $message
     * @return Contact
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
     * Set dateenvoi
     *
     * @param \DateTime $dateenvoi
     * @return Contact
     */
    public function setDateenvoi($dateenvoi)
    {
        $this->dateenvoi = $dateenvoi;

        return $this;
    }

    /**
     * Get dateenvoi
     *
     * @return \DateTime 
     */
    public function getDateenvoi()
    {
        return $this->dateenvoi;
    }

    /**
     * Set destinataire
     *
     * @param \Business\AnnuaireBundle\Entity\User $destinataire
     * @return Contact
     */
    public function setDestinataire(\Business\AnnuaireBundle\Entity\User $destinataire = null)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get destinataire
     *
     * @return \Business\AnnuaireBundle\Entity\User 
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }
}
