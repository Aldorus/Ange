<?php

namespace Ange\AngeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ange\AngeBundle\Entity\Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity
 */
class Note
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
     * @var date $date
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer $valeur
     *
     * @ORM\Column(name="valeur", type="integer", nullable=false)
     */
    private $valeur;

    /**
     * @var Devoir
     *
     * @ORM\ManyToOne(targetEntity="Devoir")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_devoir", referencedColumnName="id")
     * })
     */
    private $idDevoir;

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
     * Set date
     *
     * @param date $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return date 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set valeur
     *
     * @param integer $valeur
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;
    }

    /**
     * Get valeur
     *
     * @return integer 
     */
    public function getValeur()
    {
        return $this->valeur;
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