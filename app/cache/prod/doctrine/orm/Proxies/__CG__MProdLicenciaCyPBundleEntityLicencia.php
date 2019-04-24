<?php

namespace Proxies\__CG__\MProd\LicenciaCyPBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Licencia extends \MProd\LicenciaCyPBundle\Entity\Licencia implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Licencia' . "\0" . 'id', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Licencia' . "\0" . 'anio', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Licencia' . "\0" . 'licencia', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Licencia' . "\0" . 'fechaEmitida', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Licencia' . "\0" . 'fechaVencimiento', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Licencia' . "\0" . 'comprobante', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Licencia' . "\0" . 'tipoLicencia', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Licencia' . "\0" . 'persona');
        }

        return array('__isInitialized__', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Licencia' . "\0" . 'id', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Licencia' . "\0" . 'anio', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Licencia' . "\0" . 'licencia', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Licencia' . "\0" . 'fechaEmitida', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Licencia' . "\0" . 'fechaVencimiento', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Licencia' . "\0" . 'comprobante', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Licencia' . "\0" . 'tipoLicencia', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Licencia' . "\0" . 'persona');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Licencia $proxy) {
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnio', array());

        return parent::getAnio();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnio($anio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnio', array($anio));

        return parent::setAnio($anio);
    }

    /**
     * {@inheritDoc}
     */
    public function getLicencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLicencia', array());

        return parent::getLicencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setLicencia($licencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLicencia', array($licencia));

        return parent::setLicencia($licencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaEmitida()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaEmitida', array());

        return parent::getFechaEmitida();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaEmitida($fechaEmitida)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaEmitida', array($fechaEmitida));

        return parent::setFechaEmitida($fechaEmitida);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaVencimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaVencimiento', array());

        return parent::getFechaVencimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaVencimiento($fechaVencimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaVencimiento', array($fechaVencimiento));

        return parent::setFechaVencimiento($fechaVencimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getComprobante()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComprobante', array());

        return parent::getComprobante();
    }

    /**
     * {@inheritDoc}
     */
    public function setComprobante($comprobante)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComprobante', array($comprobante));

        return parent::setComprobante($comprobante);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoLicencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoLicencia', array());

        return parent::getTipoLicencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoLicencia(\MProd\LicenciaCyPBundle\Entity\TipoLicencia $tipoLicencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoLicencia', array($tipoLicencia));

        return parent::setTipoLicencia($tipoLicencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getPersona()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPersona', array());

        return parent::getPersona();
    }

    /**
     * {@inheritDoc}
     */
    public function setPersona(\MProd\LicenciaCyPBundle\Entity\Persona $persona)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPersona', array($persona));

        return parent::setPersona($persona);
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