<?php
namespace Ange\AngeBundle\Manager;

use Ange\AngeBundle\Entity\Utilisateur;

class NoteManager{
	
	private $controller;
	
	function __construct($controller){
		$this->controller = $controller;
	}
	
	function getNoteAndMoyenne($user){
		//récuperation de ses notes
	
    	$em = $this->controller->getDoctrine()->getEntityManager();
        $entities = $em->getRepository('AngeAngeBundle:Note')->findByidUtilisateur($user->getId());
    	$arrayResult = array();
    	$moyenne=0;
    	foreach ($entities as $entity){
    		if($entity->getIdDevoir()->isAnneeCourante()){
    			$qb=$em->createQueryBuilder()
    			->select('n')
    			->from('AngeAngeBundle:Note','n')
    			->where('n.idDevoir = :paramIdDevoir')
    			->setParameter('paramIdDevoir',$entity->getidDevoir());
    			$notes = $qb->getQuery()->getResult();
    			 
    			//pour chaque note on trouve la moyenne de la classe
    			$nombre=0;
    			$somme=0;
    			foreach ($notes as $note){
    				$somme+=$note->getValeur();
    				$nombre++;
    			}
    			$moyenne = $somme/$nombre;
    			$arrayResult[]=array($entity,$moyenne);
    			  
    		}
    	}
    	return $arrayResult;
	}
}