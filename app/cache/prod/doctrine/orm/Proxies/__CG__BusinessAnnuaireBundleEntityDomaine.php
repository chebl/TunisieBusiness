<?php

namespace Proxies\__CG__\Business\AnnuaireBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Domaine extends \Business\AnnuaireBundle\Entity\Domaine implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Business\\AnnuaireBundle\\Entity\\Domaine' . "\0" . 'id', '' . "\0" . 'Business\\AnnuaireBundle\\Entity\\Domaine' . "\0" . 'nom', '' . "\0" . 'Business\\AnnuaireBundle\\Entity\\Domaine' . "\0" . 'datepublication', '' . "\0" . 'Business\\AnnuaireBundle\\Entity\\Domaine' . "\0" . 'specialites');
        }

        return array('__isInitialized__', '' . "\0" . 'Business\\AnnuaireBundle\\Entity\\Domaine' . "\0" . 'id', '' . "\0" . 'Business\\AnnuaireBundle\\Entity\\Domaine' . "\0" . 'nom', '' . "\0" . 'Business\\AnnuaireBundle\\Entity\\Domaine' . "\0" . 'datepublication', '' . "\0" . 'Business\\AnnuaireBundle\\Entity\\Domaine' . "\0" . 'specialites');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Domaine $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function prePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', array());

        return parent::prePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatepublication($datepublication)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatepublication', array($datepublication));

        return parent::setDatepublication($datepublication);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatepublication()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatepublication', array());

        return parent::getDatepublication();
    }

    /**
     * {@inheritDoc}
     */
    public function addSpecialite(\Business\AnnuaireBundle\Entity\Specialite $specialites)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSpecialite', array($specialites));

        return parent::addSpecialite($specialites);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSpecialite(\Business\AnnuaireBundle\Entity\Specialite $specialites)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSpecialite', array($specialites));

        return parent::removeSpecialite($specialites);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpecialites()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpecialites', array());

        return parent::getSpecialites();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}