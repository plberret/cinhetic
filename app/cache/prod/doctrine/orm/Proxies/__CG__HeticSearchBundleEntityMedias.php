<?php

namespace Proxies\__CG__\Hetic\SearchBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Medias extends \Hetic\SearchBundle\Entity\Medias implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setLegend($legend)
    {
        $this->__load();
        return parent::setLegend($legend);
    }

    public function getLegend()
    {
        $this->__load();
        return parent::getLegend();
    }

    public function setPicture($picture)
    {
        $this->__load();
        return parent::setPicture($picture);
    }

    public function getPicture()
    {
        $this->__load();
        return parent::getPicture();
    }

    public function setState($state)
    {
        $this->__load();
        return parent::setState($state);
    }

    public function getState()
    {
        $this->__load();
        return parent::getState();
    }

    public function setDateCreated($dateCreated)
    {
        $this->__load();
        return parent::setDateCreated($dateCreated);
    }

    public function getDateCreated()
    {
        $this->__load();
        return parent::getDateCreated();
    }

    public function setDateUpdated($dateUpdated)
    {
        $this->__load();
        return parent::setDateUpdated($dateUpdated);
    }

    public function getDateUpdated()
    {
        $this->__load();
        return parent::getDateUpdated();
    }

    public function setFilm(\Hetic\SearchBundle\Entity\Film $film = NULL)
    {
        $this->__load();
        return parent::setFilm($film);
    }

    public function getFilm()
    {
        $this->__load();
        return parent::getFilm();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'legend', 'picture', 'state', 'dateCreated', 'dateUpdated', 'film');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}