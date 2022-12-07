<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Scene extends \App\Entity\Scene implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'storyline', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'content', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'count', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'isEnabled', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'proposedScenes'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'storyline', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'content', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'count', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'isEnabled', '' . "\0" . 'App\\Entity\\Scene' . "\0" . 'proposedScenes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Scene $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getStoryline(): ?\App\Entity\Storyline
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStoryline', []);

        return parent::getStoryline();
    }

    /**
     * {@inheritDoc}
     */
    public function setStoryline(?\App\Entity\Storyline $storyline): \App\Entity\Scene
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStoryline', [$storyline]);

        return parent::setStoryline($storyline);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', []);

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent(?string $content): \App\Entity\Scene
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', [$content]);

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): \App\Entity\Scene
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getCount(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCount', []);

        return parent::getCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setCount(int $count): \App\Entity\Scene
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCount', [$count]);

        return parent::setCount($count);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): \App\Entity\Scene
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt): \App\Entity\Scene
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function isIsEnabled(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isIsEnabled', []);

        return parent::isIsEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsEnabled(bool $isEnabled): \App\Entity\Scene
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsEnabled', [$isEnabled]);

        return parent::setIsEnabled($isEnabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getProposedScenes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProposedScenes', []);

        return parent::getProposedScenes();
    }

    /**
     * {@inheritDoc}
     */
    public function addProposedScene(\App\Entity\ProposedScene $proposedScene): \App\Entity\Scene
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProposedScene', [$proposedScene]);

        return parent::addProposedScene($proposedScene);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProposedScene(\App\Entity\ProposedScene $proposedScene): \App\Entity\Scene
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProposedScene', [$proposedScene]);

        return parent::removeProposedScene($proposedScene);
    }

}
