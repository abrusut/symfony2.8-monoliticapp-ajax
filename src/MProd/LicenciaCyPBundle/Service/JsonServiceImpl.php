<?php
namespace MProd\LicenciaCyPBundle\Service;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

class JsonServiceImpl implements IJsonService{

    private $arrayIgnoredAttributes;

    public function transformToJson($object){
        $encoders = new JsonEncoder();
        $normalizer = new GetSetMethodNormalizer();
        
        $callback = function ($dateTime) {
            return $dateTime instanceof \DateTime
                ? $dateTime->format('d/m/Y')
                : '';
        };

        $normalizer->setCallbacks(array('fechaNacimiento' => $callback));

        if(!is_null($this->arrayIgnoredAttributes) && 
            is_array($this->arrayIgnoredAttributes))
            $normalizer->setIgnoredAttributes($this->arrayIgnoredAttributes);

        $serializer = new Serializer(array($normalizer), array($encoders));

        return $serializer->serialize($object, 'json');
    }

    /**
     * Get the value of arrayIgnoredAttributes
     */ 
    public function getArrayIgnoredAttributes()
    {
        return $this->arrayIgnoredAttributes;
    }

    /**
     * Set the value of arrayIgnoredAttributes
     *
     * @return  self
     */ 
    public function setArrayIgnoredAttributes($arrayIgnoredAttributes)
    {
        $this->arrayIgnoredAttributes = $arrayIgnoredAttributes;

        return $this;
    }
}


?>