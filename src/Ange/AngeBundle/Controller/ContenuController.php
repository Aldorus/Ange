<?php

namespace Ange\AngeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ange\AngeBundle\Entity\Contenu;
use Ange\AngeBundle\Form\ContenuType;

/**
 * Contenu controller.
 *
 */
class ContenuController extends Controller
{
    /**
     * Lists all Contenu entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AngeAngeBundle:Contenu')->findAll();

        return $this->render('AngeAngeBundle:Contenu:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Contenu entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Contenu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contenu entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AngeAngeBundle:Contenu:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Contenu entity.
     *
     */
    public function newAction()
    {
        $entity = new Contenu();
        $form   = $this->createForm(new ContenuType(), $entity);

        return $this->render('AngeAngeBundle:Contenu:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Contenu entity.
     *
     */
    public function createAction()
    {
        $entity  = new Contenu();
        $request = $this->getRequest();
        $form    = $this->createForm(new ContenuType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contenu_show', array('id' => $entity->getId())));
            
        }

        return $this->render('AngeAngeBundle:Contenu:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Contenu entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Contenu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contenu entity.');
        }

        $editForm = $this->createForm(new ContenuType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AngeAngeBundle:Contenu:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Contenu entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AngeAngeBundle:Contenu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contenu entity.');
        }

        $editForm   = $this->createForm(new ContenuType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contenu_edit', array('id' => $id)));
        }

        return $this->render('AngeAngeBundle:Contenu:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Contenu entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AngeAngeBundle:Contenu')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Contenu entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('contenu'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
