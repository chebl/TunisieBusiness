<?php

namespace  Business\AnnuaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * socialnetwork
 
 * @ORM\Entity
 */
class SocialNetwork
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
     * @ORM\Column(name="urlfb", type="string", length=255)
     */
    private $urlfb;
 
       /**
     * @var string
     *
     * @ORM\Column(name="urltwitter", type="string", length=255)
     */
    private $urltwitter;
 
       /**
     * @var string
     *
     * @ORM\Column(name="urlyoutube", type="string", length=255)
     */
    private $urlyoutube;
   
       /**
     * @var string
     *
     * @ORM\Column(name="urllinkedin", type="string", length=255)
     */
    private $urllinkedin;
     /**
     * @var string
     *
     * @ORM\Column(name="urlgoogleplus", type="string", length=255)
     */
    private $urlgoogleplus;
    
    /**
     * @var string
     *
     * @ORM\Column(name="urlsiteweb", type="string", length=255)
     */
    private $urlsiteweb;
    
    
     /**
* @ORM\ManyToOne(targetEntity="Business\AnnuaireBundle\Entity\User")
    
    */
 private $societe;
    
    
 

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
     * Set urlfb
     *
     * @param string $urlfb
     * @return SocialNetwork
     */
    public function setUrlfb($urlfb)
    {
        $this->urlfb = $urlfb;

        return $this;
    }

    /**
     * Get urlfb
     *
     * @return string 
     */
    public function getUrlfb()
    {
        return $this->urlfb;
    }

    /**
     * Set urltwitter
     *
     * @param string $urltwitter
     * @return SocialNetwork
     */
    public function setUrltwitter($urltwitter)
    {
        $this->urltwitter = $urltwitter;

        return $this;
    }

    /**
     * Get urltwitter
     *
     * @return string 
     */
    public function getUrltwitter()
    {
        return $this->urltwitter;
    }

    /**
     * Set urlyoutube
     *
     * @param string $urlyoutube
     * @return SocialNetwork
     */
    public function setUrlyoutube($urlyoutube)
    {
        $this->urlyoutube = $urlyoutube;

        return $this;
    }

    /**
     * Get urlyoutube
     *
     * @return string 
     */
    public function getUrlyoutube()
    {
        return $this->urlyoutube;
    }

    /**
     * Set urllinkedin
     *
     * @param string $urllinkedin
     * @return SocialNetwork
     */
    public function setUrllinkedin($urllinkedin)
    {
        $this->urllinkedin = $urllinkedin;

        return $this;
    }

    /**
     * Get urllinkedin
     *
     * @return string 
     */
    public function getUrllinkedin()
    {
        return $this->urllinkedin;
    }

    /**
     * Set urlgoogleplus
     *
     * @param string $urlgoogleplus
     * @return SocialNetwork
     */
    public function setUrlgoogleplus($urlgoogleplus)
    {
        $this->urlgoogleplus = $urlgoogleplus;

        return $this;
    }

    /**
     * Get urlgoogleplus
     *
     * @return string 
     */
    public function getUrlgoogleplus()
    {
        return $this->urlgoogleplus;
    }

    /**
     * Set urlsiteweb
     *
     * @param string $urlsiteweb
     * @return SocialNetwork
     */
    public function setUrlsiteweb($urlsiteweb)
    {
        $this->urlsiteweb = $urlsiteweb;

        return $this;
    }

    /**
     * Get urlsiteweb
     *
     * @return string 
     */
    public function getUrlsiteweb()
    {
        return $this->urlsiteweb;
    }

    /**
     * Set societe
     *
     * @param \Business\AnnuaireBundle\Entity\User $societe
     * @return SocialNetwork
     */
    public function setSociete(\Business\AnnuaireBundle\Entity\User $societe = null)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return \Business\AnnuaireBundle\Entity\User 
     */
    public function getSociete()
    {
        return $this->societe;
    }
}
