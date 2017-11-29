<?php

namespace MyApp\FreelancerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MyApp\FreelancerBundle\Entity\Projetv;
use MyApp\FreelancerBundle\Form\ProjetvType;

/**
 * Projetv controller.
 *
 */
class ProjetvController extends Controller
{

    /**
     * Lists all Projetv entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FreelancerBundle:Projetv')->findAll();

        return $this->render('FreelancerBundle:Projetv:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Projetv entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Projetv();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('projetv_show', array('id' => $entity->getId())));
        }

        return $this->render('FreelancerBundle:Projetv:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Projetv entity.
     *
     * @param Projetv $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Projetv $entity)
    {
        $form = $this->createForm(new ProjetvType(), $entity, array(
            'action' => $this->generateUrl('projetv_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Projetv entity.
     *
     */
    public function newAction()
    {
        $entity = new Projetv();
        $form   = $this->createCreateForm($entity);

        return $this->render('FreelancerBundle:Projetv:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Projetv entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Projetv')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projetv entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FreelancerBundle:Projetv:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Projetv entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Projetv')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projetv entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FreelancerBundle:Projetv:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Projetv entity.
    *
    * @param Projetv $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Projetv $entity)
    {
        $form = $this->createForm(new ProjetvType(), $entity, array(
            'action' => $this->generateUrl('projetv_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Projetv entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Projetv')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projetv entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('projetv_edit', array('id' => $id)));
        }

        return $this->render('FreelancerBundle:Projetv:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Projetv entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FreelancerBundle:Projetv')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Projetv entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('projetv'));
    }

    /**
     * Creates a form to delete a Projetv entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('projetv_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
