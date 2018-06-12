<?php

namespace MProd\LicenciaCyPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="localidad")
 */
class Localidad {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length = 3)
     * @Assert\NotBlank()
     */
    protected $l_distrito;

    /**
     * @ORM\Column(type="string", length = 150)
     * @Assert\NotBlank()
     */
    protected $l_nom_dis;

    /**
     * @ORM\Column(type="string", length = 3)
     * @Assert\NotBlank()
     */
    protected $l_departamento;

    /**
     * @ORM\Column(type="string", length = 150)
     * @Assert\NotBlank()
     */
    protected $l_nom_dpto;

    /**
     * @ORM\Column(type="string", length = 250)
     * @Assert\NotBlank()
     */
    protected $nodo;

    /**
     * Set l_distrito
     *
     * @param string $lDistrito
     * @return Localidad
     */
    public function setLDistrito($lDistrito) {
        $this->l_distrito = $lDistrito;

        return $this;
    }

    /**
     * Get l_distrito
     *
     * @return string
     */
    public function getLDistrito() {
        return $this->l_distrito;
    }

    /**
     * Set l_nom_dis
     *
     * @param string $lNomDis
     * @return Localidad
     */
    public function setLNomDis($lNomDis) {
        $this->l_nom_dis = $lNomDis;

        return $this;
    }

    /**
     * Get l_nom_dis
     *
     * @return string
     */
    public function getLNomDis() {
        return $this->l_nom_dis;
    }

    /**
     * Set l_departamento
     *
     * @param string $lDepartamento
     * @return Localidad
     */
    public function setLDepartamento($lDepartamento) {
        $this->l_departamento = $lDepartamento;

        return $this;
    }

    /**
     * Get l_departamento
     *
     * @return string
     */
    public function getLDepartamento() {
        return $this->l_departamento;
    }

    /**
     * Set l_nom_dpto
     *
     * @param string $lNomDpto
     * @return Localidad
     */
    public function setLNomDpto($lNomDpto) {
        $this->l_nom_dpto = $lNomDpto;

        return $this;
    }

    /**
     * Get l_nom_dpto
     *
     * @return string
     */
    public function getLNomDpto() {
        return $this->l_nom_dpto;
    }

    /**
     * Set nodo
     *
     * @param string $nodo
     * @return Localidad
     */
    public function setNodo($nodo) {
        $this->nodo = $nodo;

        return $this;
    }

    /**
     * Get nodo
     *
     * @return string
     */
    public function getNodo() {
        return $this->nodo;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Primero va distrito, departamento y nodo
     */
    public function __toString() {
        return $this->getLNomDis() ." - ".$this->getLNomDpto(). " - " . $this->getNodo();
    }

}