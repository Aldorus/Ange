<?php

namespace Ange\AngeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Ange\AngeBundle\Entity\Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity
 */
class Cours
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
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;
    
    /**
     * @var integer $duree
     *
     * @ORM\Column(name="duree", type="integer", nullable=false)
     */
    private $duree;
    
    /**
     * @var Matiere
     *
     * @ORM\ManyToOne(targetEntity="Matiere")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_matiere", referencedColumnName="id")
     * })
     */
    private $idMatiere;

    /**
     * @var Salle
     *
     * @ORM\ManyToOne(targetEntity="Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_salle", referencedColumnName="id")
     * })
     */
    private $idSalle;



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
     * Set idMatiere
     *
     * @param Ange\AngeBundle\Entity\Matiere $idMatiere
     */
    public function setIdMatiere(\Ange\AngeBundle\Entity\Matiere $idMatiere)
    {
        $this->idMatiere = $idMatiere;
    }

    /**
     * Get idMatiere
     *
     * @return Ange\AngeBundle\Entity\Matiere 
     */
    public function getIdMatiere()
    {
        return $this->idMatiere;
    }

    /**
     * Set idSalle
     *
     * @param Ange\AngeBundle\Entity\Salle $idSalle
     */
    public function setIdSalle(\Ange\AngeBundle\Entity\Salle $idSalle)
    {
        $this->idSalle = $idSalle;
    }

    /**
     * Get idSalle
     *
     * @return Ange\AngeBundle\Entity\Salle 
     */
    public function getIdSalle()
    {
        return $this->idSalle;
    }
    
	/**
     * Set date
     *
     * @param datetime $date
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
     * Set duree
     *
     * @param integer $duree
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    /**
     * Get duree
     *
     * @return duree 
     */
    public function getDuree()
    {
        return $this->duree;
    }
    
	//methodes fonctionnelles
    //tester si le cours est dans l'année courante
    public function isAnneeCourante(){
    	$now = date('Ymd');
    	$now = new \DateTime($now);
    	$annee = strftime('%Y', $now->getTimestamp());
    	$ref = new \DateTime($annee.'-09-01');
    	//on test le mois courant
    	if(strftime('%m', $now->getTimestamp())<9){
			//si il est avant janvier on decrémente l'année courant
    		$ref->modify('-1 year');  		
    	}
    	$next = $this->date;
    	$next->format('Ymd');
    	
    	if($ref<$next){
    		return true;
    	}else{
    		return false;
    	}		
    	
    }
    
    //tester si le cours est passé
    public function isPasse(){
    	$now = date('Y-m-d');
    	$now = new \DateTime($now);
    	
    	$next = $this->date;
    	$next->format('Y-m-d');
    	
    	if($now>$next){
    		return true;
    	}else{
    		return false;
    	}
    }
    
    //tester si le cours est passé + année courante
    public function isPasseAnneeCourante(){
    	if($this->isPasse() && $this->isAnneeCourante()){
    		return true;
    	}else{
    		return false;
    	}
    }
    
    //test si le cours est à venir
    public function isAVenir(){
    $now = date('Y-m-d');
    	$now = new \DateTime($now);
    	
    	$next = $this->date;
    	$next->format('Y-m-d');
    	
    	if($now>$next){
    		return true;
    	}else{
    		return false;
    	}
    }
    
	//test si le cours est à venir + année courange 
	public function isAVenirAnneeCourante(){
		if($this->isAVenir() && $this->isAnneeCourante()){
			return true;
		}else{
			return false;
		}
	}
	
	public function __toString(){
		return $this->label;
	}
}