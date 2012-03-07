<?php

namespace Ange\AngeBundle\Entity;
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ange\AngeBundle\Entity\Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur extends BaseUser
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    protected $nom;

    /**
     * @var string $prenom
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    protected $prenom;

    /**
     * @var string $login
     *
     * @ORM\Column(name="login", type="string", length=100, nullable=false)
     */
    protected $login;

    /**
     * @var string $adresse
     *
     * @ORM\Column(name="adresse", type="string", length=100, nullable=true)
     */
    protected $adresse;

    /**
     * @var string $cp
     *
     * @ORM\Column(name="cp", type="string", length=10, nullable=true)
     */
    protected $cp;

    /**
     * @var string $ville
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=true)
     */
    protected $ville;

    /**
     * @var string $telephone
     *
     * @ORM\Column(name="telephone", type="string", length=20, nullable=true)
     */
    protected $telephone;

    /**
     * @var string $mail
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=true)
     */
    protected $mail;

    /**
     * @var date $dateInscription
     *
     * @ORM\Column(name="date_inscription", type="date", nullable=false)
     */
    protected $dateInscription;

    /**
     * @var Groupedevoir
     *
     * @ORM\ManyToMany(targetEntity="Groupedevoir", mappedBy="idUtilisateur")
     */
    protected $idGroupeDevoir;

    /**
     * @var Promotion
     *
     * @ORM\ManyToMany(targetEntity="Promotion", inversedBy="idUtilisateur")
     * @ORM\JoinTable(name="asso_utilisateur_promotion",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_promotion", referencedColumnName="id")
     *   }
     * )
     */
    protected $idPromotion;

    /**
     * @var Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_groupe", referencedColumnName="id")
     * })
     */
    protected $idGroupe;

    public function __construct()
    {
        $this->idGroupeDevoir = new \Doctrine\Common\Collections\ArrayCollection();
    $this->idPromotion = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set login
     *
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cp
     *
     * @param string $cp
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set mail
     *
     * @param string $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set dateInscription
     *
     * @param date $dateInscription
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;
    }

    /**
     * Get dateInscription
     *
     * @return date 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Add idGroupeDevoir
     *
     * @param Ange\AngeBundle\Entity\Groupedevoir $idGroupeDevoir
     */
    public function addGroupedevoir(\Ange\AngeBundle\Entity\Groupedevoir $idGroupeDevoir)
    {
        $this->idGroupeDevoir[] = $idGroupeDevoir;
    }

    /**
     * Get idGroupeDevoir
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getIdGroupeDevoir()
    {
        return $this->idGroupeDevoir;
    }

    /**
     * Add idPromotion
     *
     * @param Ange\AngeBundle\Entity\Promotion $idPromotion
     */
    public function addPromotion(\Ange\AngeBundle\Entity\Promotion $idPromotion)
    {
        $this->idPromotion[] = $idPromotion;
    }

    /**
     * Get idPromotion
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getIdPromotion()
    {
        return $this->idPromotion;
    }

    /**
     * Set idGroupe
     *
     * @param Ange\AngeBundle\Entity\Groupe $idGroupe
     */
    public function setIdGroupe(\Ange\AngeBundle\Entity\Groupe $idGroupe)
    {
        $this->idGroupe = $idGroupe;
    }

    /**
     * Get idGroupe
     *
     * @return Ange\AngeBundle\Entity\Groupe 
     */
    public function getIdGroupe()
    {
        return $this->idGroupe;
    }
}