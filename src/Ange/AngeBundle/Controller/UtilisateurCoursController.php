<?php

namespace Ange\AngeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ange\AngeBundle\Entity\UtilisateurCours;
use Ange\AngeBundle\Form\UtilisateurCoursType;
use Ange\AngeBundle\Manager\UtilisateurCoursManager;

/**
 * UtilisateurCours controller.
 *
 */
class UtilisateurCoursController extends Controller
{
    /**
     * Lists all UtilisateurCours entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AngeAngeBundle:UtilisateurCours')->findAll();

        return $this->render('AngeAngeBundle:UtilisateurCours:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a UtilisateurCours entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:UtilisateurCours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UtilisateurCours entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AngeAngeBundle:UtilisateurCours:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new UtilisateurCours entity.
     *
     */
    public function newAction()
    {
        $entity = new UtilisateurCours();
        $form   = $this->createForm(new UtilisateurCoursType(), $entity);

        return $this->render('AngeAngeBundle:UtilisateurCours:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new UtilisateurCours entity.
     *
     */
    public function createAction()
    {
        $entity  = new UtilisateurCours();
        $request = $this->getRequest();
        $form    = $this->createForm(new UtilisateurCoursType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('utilisateurcours_show', array('id' => $entity->getId())));
            
        }

        return $this->render('AngeAngeBundle:UtilisateurCours:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing UtilisateurCours entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:UtilisateurCours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UtilisateurCours entity.');
        }

        $editForm = $this->createForm(new UtilisateurCoursType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AngeAngeBundle:UtilisateurCours:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing UtilisateurCours entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:UtilisateurCours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UtilisateurCours entity.');
        }

        $editForm   = $this->createForm(new UtilisateurCoursType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('utilisateurcours_edit', array('id' => $id)));
        }

        return $this->render('AngeAngeBundle:UtilisateurCours:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a UtilisateurCours entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AngeAngeBundle:UtilisateurCours')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find UtilisateurCours entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('utilisateurcours'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    
    public function feuilleDePresenceAction($id){
    	//on recupere l'id du cours
    	$coursUserManager = new UtilisateurCoursManager($this);
        $listeUtilisateur = $coursUserManager->getUtilisateurByCours($id);
    	return $this->render('AngeAngeBundle:UtilisateurCours:feuille_presence.html.twig',array(
    		'utilisateurs'		=>	$listeUtilisateur,
    		'coursDefault'	=> -1,
    	));
    }
}
