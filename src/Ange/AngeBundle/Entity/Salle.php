<?php

namespace Ange\AngeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ange\AngeBundle\Entity\Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity
 */
class Salle
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer $numero
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string $batiment
     *
     * @ORM\Column(name="batiment", type="string", length=45, nullable=true)
     */
    private $batiment;

    /**
     * @var string $label
     *
     * @ORM\Column(name="label", type="string", length=100, nullable=true)
     */
    private $label;



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
     * Set numero
     *
     * @param integer $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set batiment
     *
     * @param string $batiment
     */
    public function setBatiment($batiment)
    {
        $this->batiment = $batiment;
    }

    /**
     * Get batiment
     *
     * @return string 
     */
    public function getBatiment()
    {
        return $this->batiment;
    }

    /**
     * Set label
     *
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }
    
    public function __toString(){
    	return $this->label;
    }
}