<?php

namespace Ange\AngeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ange\AngeBundle\Entity\Devoir;
use Ange\AngeBundle\Form\DevoirType;

/**
 * Devoir controller.
 *
 */
class DevoirController extends Controller
{
    /**
     * Lists all Devoir entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AngeAngeBundle:Devoir')->findAll();

        return $this->render('AngeAngeBundle:Devoir:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Devoir entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Devoir')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Devoir entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AngeAngeBundle:Devoir:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Devoir entity.
     *
     */
    public function newAction()
    {
        $entity = new Devoir();
        $form   = $this->createForm(new DevoirType(), $entity);

        return $this->render('AngeAngeBundle:Devoir:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Devoir entity.
     *
     */
    public function createAction()
    {
        $entity  = new Devoir();
        $request = $this->getRequest();
        $form    = $this->createForm(new DevoirType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('devoir_show', array('id' => $entity->getId())));
            
        }

        return $this->render('AngeAngeBundle:Devoir:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Devoir entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Devoir')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Devoir entity.');
        }

        $editForm = $this->createForm(new DevoirType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AngeAngeBundle:Devoir:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Devoir entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Devoir')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Devoir entity.');
        }

        $editForm   = $this->createForm(new DevoirType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('devoir_edit', array('id' => $id)));
        }

        return $this->render('AngeAngeBundle:Devoir:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Devoir entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AngeAngeBundle:Devoir')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Devoir entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('devoir'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
