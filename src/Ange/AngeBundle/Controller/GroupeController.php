<?php

namespace Ange\AngeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ange\AngeBundle\Entity\Groupe;
use Ange\AngeBundle\Form\GroupeType;

/**
 * Groupe controller.
 *
 */
class GroupeController extends Controller
{
    /**
     * Lists all Groupe entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AngeAngeBundle:Groupe')->findAll();

        return $this->render('AngeAngeBundle:Groupe:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Groupe entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Groupe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Groupe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AngeAngeBundle:Groupe:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Groupe entity.
     *
     */
    public function newAction()
    {
        $entity = new Groupe();
        $form   = $this->createForm(new GroupeType(), $entity);

        return $this->render('AngeAngeBundle:Groupe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Groupe entity.
     *
     */
    public function createAction()
    {
        $entity  = new Groupe();
        $request = $this->getRequest();
        $form    = $this->createForm(new GroupeType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('groupe_show', array('id' => $entity->getId())));
            
        }

        return $this->render('AngeAngeBundle:Groupe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Groupe entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Groupe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Groupe entity.');
        }

        $editForm = $this->createForm(new GroupeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AngeAngeBundle:Groupe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Groupe entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Groupe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Groupe entity.');
        }

        $editForm   = $this->createForm(new GroupeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('groupe_edit', array('id' => $id)));
        }

        return $this->render('AngeAngeBundle:Groupe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Groupe entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AngeAngeBundle:Groupe')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Groupe entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('groupe'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
