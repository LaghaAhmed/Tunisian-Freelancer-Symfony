<?php

namespace MyApp\FreelancerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MyApp\FreelancerBundle\Entity\Projetsuivi;
use MyApp\FreelancerBundle\Form\ProjetsuiviType;

/**
 * Projetsuivi controller.
 *
 */
class ProjetsuiviController extends Controller
{

    /**
     * Lists all Projetsuivi entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FreelancerBundle:Projetsuivi')->findAll();

        return $this->render('FreelancerBundle:Projetsuivi:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Projetsuivi entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Projetsuivi();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('projetsuivi_show', array('id' => $entity->getId())));
        }

        return $this->render('FreelancerBundle:Projetsuivi:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Projetsuivi entity.
     *
     * @param Projetsuivi $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Projetsuivi $entity)
    {
        $form = $this->createForm(new ProjetsuiviType(), $entity, array(
            'action' => $this->generateUrl('projetsuivi_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Projetsuivi entity.
     *
     */
    public function newAction()
    {
        $entity = new Projetsuivi();
        $form   = $this->createCreateForm($entity);

        return $this->render('FreelancerBundle:Projetsuivi:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Projetsuivi entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Projetsuivi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projetsuivi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FreelancerBundle:Projetsuivi:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Projetsuivi entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Projetsuivi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projetsuivi entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FreelancerBundle:Projetsuivi:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Projetsuivi entity.
    *
    * @param Projetsuivi $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Projetsuivi $entity)
    {
        $form = $this->createForm(new ProjetsuiviType(), $entity, array(
            'action' => $this->generateUrl('projetsuivi_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Projetsuivi entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Projetsuivi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projetsuivi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('projetsuivi_edit', array('id' => $id)));
        }

        return $this->render('FreelancerBundle:Projetsuivi:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Projetsuivi entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FreelancerBundle:Projetsuivi')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Projetsuivi entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('projetsuivi'));
    }

    /**
     * Creates a form to delete a Projetsuivi entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('projetsuivi_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
