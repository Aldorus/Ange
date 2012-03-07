<?php

namespace Ange\AngeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ange\AngeBundle\Entity\Cours
 *
 * @ORM\Table(name="contenu")
 * @ORM\Entity
 */
class Contenu
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
     * @var string $idFonctionnel
     *
     * @ORM\Column(name="id_fonctionnel", type="string", length=100, nullable=false)
     */
    private $idFonctionnel;

    /**
     * @var string $texte
     *
     * @ORM\Column(name="texte", type="text", nullable=true)
     */
    private $texte;

        

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
     * Set idFoncionnel
     *
     * @param string $idFonctionnel
     */
    public function setIdfoncionnel($idFonctionnel)
    {
        $this->idFonctionnel = $idFonctionnel;
    }

    /**
     * Get idFoncionnel
     *
     * @return string 
     */
    public function getIdfonctionnel()
    {
        return $this->idFonctionnel;
    }
    
	/**
     * Set texte
     *
     * @param string $texte
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    
}