<?php

namespace Ange\AngeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ange\AngeBundle\Entity\Utilisateur;
use Ange\AngeBundle\Form\UtilisateurType;

/**
 * Utilisateur controller.
 *
 */
class UtilisateurController extends Controller
{
    /**
     * Lists all Utilisateur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AngeAngeBundle:Utilisateur')->findAll();

        return $this->render('AngeAngeBundle:Utilisateur:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Utilisateur entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Utilisateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AngeAngeBundle:Utilisateur:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Utilisateur entity.
     *
     */
    public function newAction()
    {
        $entity = new Utilisateur();
        $form   = $this->createForm(new UtilisateurType(), $entity);

        return $this->render('AngeAngeBundle:Utilisateur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Utilisateur entity.
     *
     */
    public function createAction()
    {
        $entity  = new Utilisateur();
        $request = $this->getRequest();
        $form    = $this->createForm(new UtilisateurType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('utilisateur_show', array('id' => $entity->getId())));
            
        }

        return $this->render('AngeAngeBundle:Utilisateur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Utilisateur entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Utilisateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateur entity.');
        }

        $editForm = $this->createForm(new UtilisateurType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AngeAngeBundle:Utilisateur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Utilisateur entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Utilisateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateur entity.');
        }

        $editForm   = $this->createForm(new UtilisateurType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('utilisateur_edit', array('id' => $id)));
        }

        return $this->render('AngeAngeBundle:Utilisateur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Utilisateur entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AngeAngeBundle:Utilisateur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Utilisateur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('utilisateur'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    public function consulterAction(){
    	$user= $this->container->get('security.context')->getToken()->getUser();
    	return $this->render('AngeAngeBundle:Utilisateur:profil.html.twig',array(
    		'user'		=>$user,
    	));	
    }
    
    public function contactAction(){
    	//récuperation des profs
    	$em = $this->getDoctrine()->getEntityManager();

        //$entity = $em->getRepository('AngeAngeBundle:Utilisateur')->findByroles('ROLE_PROF');
        $qb = $em->createQueryBuilder()
        ->select('u')
        ->from('AngeAngeBundle:Utilisateur','u')
        ->where("u.roles LIKE '%ROLE_PROF%' OR u.roles LIKE '%ROLE_ADMIN%'");
    	return $this->render('AngeAngeBundle:Utilisateur:contact.html.twig',array(
    		'profs'		=>	$qb->getQuery()->getResult(),
    	));
    }
    
    public function envoiMailAction(){
    	//envoi d'un mail a la personne en contact
    	//voir portfolio
    	
    }
}
