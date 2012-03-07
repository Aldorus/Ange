<?php

namespace Ange\AngeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ange\AngeBundle\Entity\Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity
 */
class Promotion
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
     * @var string $idFonctionnel
     *
     * @ORM\Column(name="id_fonctionnel", type="string", length=45, nullable=true)
     */
    private $idFonctionnel;

    /**
     * @var integer $annee
     *
     * @ORM\Column(name="annee", type="integer", nullable=false)
     */
    private $annee;

    /**
     * @var Utilisateur
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", mappedBy="idPromotion")
     */
    private $idUtilisateur;

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
     * Set idFonctionnel
     *
     * @param string $idFonctionnel
     */
    public function setIdFonctionnel($idFonctionnel)
    {
        $this->idFonctionnel = $idFonctionnel;
    }

    /**
     * Get idFonctionnel
     *
     * @return string 
     */
    public function getIdFonctionnel()
    {
        return $this->idFonctionnel;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
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
}