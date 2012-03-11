<?php
namespace Ange\AngeBundle\Manager;

class UtilisateurCoursManager{
	
	private $controller;
	
	function __construct($controller){
		$this->controller = $controller;
	}

	function nombreAbsence($user){
		$repository = $this->controller->getDoctrine()->getEntityManager();
  		$qb = $repository->createQueryBuilder()
  		->select('c')
  		->from('AngeAngeBundle:UtilisateurCours','c')
  		->where('c.idUtilisateur = :idUser AND c.present=0')
  		->setParameter('idUser',$user->getId());
		
		return count($qb->getQuery()->getResult());
	}
	
	function absenceProf($user){
		$listeCoursWhereProfAbs = array();
		
		//recuperation de tous les profs
		$repository = $this->controller->getDoctrine()->getEntityManager();
		$qb = $repository->createQueryBuilder()
		->select('c')
		->from('AngeAngeBundle:UtilisateurCours','c')
		->where('c.present = 0 AND c.prof=1');
		$coursProfAbs = $qb->getQuery()->getResult();
		
		//on cherche dans ces courslesquels sont aussi pour l'utilisateur
		foreach ($coursProfAbs as $coursL){
			$qb2 = $repository->createQueryBuilder()
			->select('c')
			->from('AngeAngeBundle:UtilisateurCours','c')
			->where('c.idUtilisateur = :idUser')
			->setParameter('idUser',$user->getId());
			
			if(count($qb2->getQuery()->getResult())>0){
				$listeCoursWhereProfAbs[]=$coursL;
			}
		}
		return $listeCoursWhereProfAbs;
	}
	
	function courActuel($user){
		
		//on parcours tous les cours ou l'utilisateur est prof et on recupere celui dont les dates corespondent
		$listeCours = $this->getUserCoursByUser($user);
		$courActuel=null;
		foreach ($listeCours as $cour) {
			$now = new \DateTime();
			$nowLimit = new \DateTime();
			$nowLimit->modify('+'.$cour->getIdCours()->getDuree().' hour');
			if($cour->getIdCours()->getDate()<$now && $nowLimit>$now){
					
				$courActuel = $cour->getIdCours();
				break;
			}
		}		
		return $courActuel;
	}

	function courSuivant($user){
		//on parcours tous les cours ou l'utilisateur est prof et on recupere celui dont les dates corespondent
		$listeCours = $this->getUserCoursByUser($user);
		$courActuel=null;
		foreach ($listeCours as $cour) {
			$now = new \DateTime();
			if($cour->getIdCours()->getDate()>$now){
				$courActuel = $cour->getIdCours();
				break;
			}
		}		
		return $courActuel;
	}
	
	function getUserCoursByUser($user){
		$repository = $this->controller->getDoctrine()->getEntityManager();
		$qb = $repository->createQueryBuilder()
		->select('c')
		->from('AngeAngeBundle:UtilisateurCours','c')
		->where('c.idUtilisateur = :idUser')
		->setParameter('idUser',$user->getId());
		
		return $qb->getQuery()->getResult();
	}
	
	function getUtilisateurByCours($idCours){
		$repository = $this->controller->getDoctrine()->getEntityManager();
		$qb = $repository->createQueryBuilder()
		->select('c')
		->from('AngeAngeBundle:UtilisateurCours','c')
		->where('c.idCours = :idCours AND c.prof=0')
		->setParameter('idCours',$idCours);
		
		$listeCoursUser = $qb->getQuery()->getResult();
		$listeUser = array();
		foreach ($listeCoursUser as $coursUser) {
			$listeUser[] = $coursUser;
		}
		return $listeUser;
	}
}