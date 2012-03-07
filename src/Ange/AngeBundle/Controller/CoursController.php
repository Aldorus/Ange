<?php

namespace Ange\AngeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ange\AngeBundle\Entity\Cours;
use Ange\AngeBundle\Form\CoursType;

/**
 * Cours controller.
 *
 */
class CoursController extends Controller
{
    /**
     * Lists all Cours entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AngeAngeBundle:Cours')->findAll();

        return $this->render('AngeAngeBundle:Cours:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Cours entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Cours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cours entity.');
        }
        
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AngeAngeBundle:Cours:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Cours entity.
     *
     */
    public function newAction()
    {
        $entity = new Cours();
        $form   = $this->createForm(new CoursType(), $entity);

        return $this->render('AngeAngeBundle:Cours:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Cours entity.
     *
     */
    public function createAction()
    {
        $entity  = new Cours();
        $request = $this->getRequest();
        $form    = $this->createForm(new CoursType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cours_show', array('id' => $entity->getId())));
            
        }

        return $this->render('AngeAngeBundle:Cours:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Cours entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Cours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cours entity.');
        }

        $editForm = $this->createForm(new CoursType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AngeAngeBundle:Cours:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Cours entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Cours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cours entity.');
        }

        $editForm   = $this->createForm(new CoursType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cours_edit', array('id' => $id)));
        }

        return $this->render('AngeAngeBundle:Cours:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Cours entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AngeAngeBundle:Cours')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cours entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cours'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
