<?php

namespace Ange\AngeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Ange\AngeBundle\Entity\Cours;
use Ange\AngeBundle\Form\CoursType;
use Ange\AngeBundle\Manager\UtilisateurCoursManager;

/**
 * Cours controller.
 *
 */
class HomeController extends Controller
{
    /**
     * Lists all Cours entities.
     *
     */
    public function indexAction()
    {
    	//recuperation de l'user courante
    	$user= $this->container->get('security.context')->getToken()->getUser();
    	//redirection suivant les roles
    	if($user->hasRole('ROLE_ADMIN')){
    		return new RedirectResponse($this->generateUrl('home_admin'));
    	}elseif($user->hasRole('ROLE_PROF')){
    		return new RedirectResponse($this->generateUrl('home_prof'));
    	}elseif($user->hasRole('ROLE_ETU')){
    		return new RedirectResponse($this->generateUrl('home_etu'));
    	}else{
    		//fucking cheat 
    		//TODO
    	}
    }
    
    public function indexEtuAction(){
    	$user= $this->container->get('security.context')->getToken()->getUser();

    	$em = $this->getDoctrine()->getEntityManager();
        $entities = $em->getRepository('AngeAngeBundle:Cours')->findAll();

        //absences personnelles
        $coursUserManager = new UtilisateurCoursManager($this);
        $nbAbsence = $coursUserManager->nombreAbsence($user);
        
        //absence d'un prof
        $absencesProf = $coursUserManager->absenceProf($user);
        
        return $this->render('AngeAngeBundle:Home:indexEtu.html.twig', array(
            'entities' 		=> $entities,
        	'nbAbsence'		=> $nbAbsence,
        	'absencesProf'	=> $absencesProf,
			'user'			=> $user,
        ));
    }
    
  	public function indexProfAction(){
  		$user= $this->container->get('security.context')->getToken()->getUser();
  		$coursUserManager = new UtilisateurCoursManager($this);
		$courActuel = $coursUserManager->courActuel($user);
		$courSuivant = $coursUserManager->courSuivant($user);
  		
        return $this->render('AngeAngeBundle:Home:indexProf.html.twig', array(
            'courActuel' 	=> $courActuel,
        	'courSuivant'	=> $courSuivant,
        	'coursDefault'	=> -1,
        ));
  	}
  	
  	public function indexAdminAction(){
  		$em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AngeAngeBundle:Cours')->findAll();

        return $this->render('AngeAngeBundle:Home:indexAdmin.html.twig', array(
            'entities' => $entities
        ));
  	}    
}
