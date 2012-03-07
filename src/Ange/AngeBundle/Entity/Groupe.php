<?php

namespace Ange\AngeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ange\AngeBundle\Entity\Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity
 */
class Groupe
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
     * @var string $label
     *
     * @ORM\Column(name="label", type="string", length=100, nullable=false)
     */
    private $label;

    /**
     * @var Promotion
     *
     * @ORM\ManyToOne(targetEntity="Promotion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_promotion", referencedColumnName="id")
     * })
     */
    private $idPromotion;



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

    /**
     * Set idPromotion
     *
     * @param Ange\AngeBundle\Entity\Promotion $idPromotion
     */
    public function setIdPromotion(\Ange\AngeBundle\Entity\Promotion $idPromotion)
    {
        $this->idPromotion = $idPromotion;
    }

    /**
     * Get idPromotion
     *
     * @return Ange\AngeBundle\Entity\Promotion 
     */
    public function getIdPromotion()
    {
        return $this->idPromotion;
    }
}