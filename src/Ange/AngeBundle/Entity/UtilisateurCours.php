<?php

namespace Ange\AngeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ange\AngeBundle\Entity\UtilisateurCours
 *
 * @ORM\Table(name="utilisateur_cours")
 * @ORM\Entity
 */
class UtilisateurCours
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
     * @var boolean $present
     *
     * @ORM\Column(name="present", type="boolean", nullable=true)
     */
    private $present;

    /**
     * @var boolean $prof
     *
     * @ORM\Column(name="prof", type="boolean", nullable=true)
     */
    private $prof;

    /**
     * @var boolean $retard
     *
     * @ORM\Column(name="retard", type="boolean", nullable=true)
     */
    private $retard;

    /**
     * @var Cours
     *
     * @ORM\ManyToOne(targetEntity="Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cours", referencedColumnName="id")
     * })
     */
    private $idCours;

    /**
     * @var Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;



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
     * Set present
     *
     * @param boolean $present
     */
    public function setPresent($present)
    {
        $this->present = $present;
    }

    /**
     * Get present
     *
     * @return boolean 
     */
    public function getPresent()
    {
        return $this->present;
    }

    /**
     * Set prof
     *
     * @param boolean $prof
     */
    public function setProf($prof)
    {
        $this->prof = $prof;
    }

    /**
     * Get prof
     *
     * @return boolean 
     */
    public function getProf()
    {
        return $this->prof;
    }

    /**
     * Set retard
     *
     * @param boolean $retard
     */
    public function setRetard($retard)
    {
        $this->retard = $retard;
    }

    /**
     * Get retard
     *
     * @return boolean 
     */
    public function getRetard()
    {
        return $this->retard;
    }

    /**
     * Set idCours
     *
     * @param Ange\AngeBundle\Entity\Cours $idCours
     */
    public function setIdCours(\Ange\AngeBundle\Entity\Cours $idCours)
    {
        $this->idCours = $idCours;
    }

    /**
     * Get idCours
     *
     * @return Ange\AngeBundle\Entity\Cours 
     */
    public function getIdCours()
    {
        return $this->idCours;
    }

    /**
     * Set idUtilisateur
     *
     * @param Ange\AngeBundle\Entity\Utilisateur $idUtilisateur
     */
    public function setIdUtilisateur(\Ange\AngeBundle\Entity\Utilisateur $idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }

    /**
     * Get idUtilisateur
     *
     * @return Ange\AngeBundle\Entity\Utilisateur 
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }
}