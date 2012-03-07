<?php

namespace Ange\AngeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ange\AngeBundle\Entity\Groupedevoir;
use Ange\AngeBundle\Form\GroupedevoirType;

/**
 * Groupedevoir controller.
 *
 */
class GroupedevoirController extends Controller
{
    /**
     * Lists all Groupedevoir entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AngeAngeBundle:Groupedevoir')->findAll();

        return $this->render('AngeAngeBundle:Groupedevoir:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Groupedevoir entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Groupedevoir')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Groupedevoir entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AngeAngeBundle:Groupedevoir:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Groupedevoir entity.
     *
     */
    public function newAction()
    {
        $entity = new Groupedevoir();
        $form   = $this->createForm(new GroupedevoirType(), $entity);

        return $this->render('AngeAngeBundle:Groupedevoir:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Groupedevoir entity.
     *
     */
    public function createAction()
    {
        $entity  = new Groupedevoir();
        $request = $this->getRequest();
        $form    = $this->createForm(new GroupedevoirType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('groupedevoir_show', array('id' => $entity->getId())));
            
        }

        return $this->render('AngeAngeBundle:Groupedevoir:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Groupedevoir entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Groupedevoir')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Groupedevoir entity.');
        }

        $editForm = $this->createForm(new GroupedevoirType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AngeAngeBundle:Groupedevoir:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Groupedevoir entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Groupedevoir')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Groupedevoir entity.');
        }

        $editForm   = $this->createForm(new GroupedevoirType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('groupedevoir_edit', array('id' => $id)));
        }

        return $this->render('AngeAngeBundle:Groupedevoir:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Groupedevoir entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AngeAngeBundle:Groupedevoir')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Groupedevoir entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('groupedevoir'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
