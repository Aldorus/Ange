<?php

namespace Ange\AngeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ange\AngeBundle\Entity\Groupedevoir
 *
 * @ORM\Table(name="groupedevoir")
 * @ORM\Entity
 */
class Groupedevoir
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
     * @ORM\Column(name="label", type="string", length=45, nullable=false)
     */
    private $label;

    /**
     * @var Utilisateur
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", inversedBy="idGroupeDevoir")
     * @ORM\JoinTable(name="asso_utilisateur_groupedevoir",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_groupe_devoir", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     *   }
     * )
     */
    private $idUtilisateur;

    /**
     * @var Devoir
     *
     * @ORM\ManyToOne(targetEntity="Devoir")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_devoir", referencedColumnName="id")
     * })
     */
    private $idDevoir;

    public function __construct()
    {
        $this->idUtilisateur = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add idUtilisateur
     *
     * @param Ange\AngeBundle\Entity\Utilisateur $idUtilisateur
     */
    public function addUtilisateur(\Ange\AngeBundle\Entity\Utilisateur $idUtilisateur)
    {
        $this->idUtilisateur[] = $idUtilisateur;
    }

    /**
     * Get idUtilisateur
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set idDevoir
     *
     * @param Ange\AngeBundle\Entity\Devoir $idDevoir
     */
    public function setIdDevoir(\Ange\AngeBundle\Entity\Devoir $idDevoir)
    {
        $this->idDevoir = $idDevoir;
    }

    /**
     * Get idDevoir
     *
     * @return Ange\AngeBundle\Entity\Devoir 
     */
    public function getIdDevoir()
    {
        return $this->idDevoir;
    }
}