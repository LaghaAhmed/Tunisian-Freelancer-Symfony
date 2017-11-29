<?php

namespace MyApp\FreelancerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MyApp\FreelancerBundle\Entity\Groupes;
use MyApp\FreelancerBundle\Form\GroupesType;

/**
 * Groupes controller.
 *
 */
class GroupesController extends Controller
{

    /**
     * Lists all Groupes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FreelancerBundle:Groupes')->findAll();

        return $this->render('FreelancerBundle:Groupes:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Groupes entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Groupes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('groupes'));
        }

        return $this->render('FreelancerBundle:Groupes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Groupes entity.
     *
     * @param Groupes $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Groupes $entity)
    {
        $form = $this->createForm(new GroupesType(), $entity, array(
            'action' => $this->generateUrl('groupes_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Groupes entity.
     *
     */
    public function newAction()
    {
        $entity = new Groupes();
        $form   = $this->createCreateForm($entity);

        return $this->render('FreelancerBundle:Groupes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Groupes entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Groupes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Groupes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FreelancerBundle:Groupes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Groupes entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Groupes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Groupes entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FreelancerBundle:Groupes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Groupes entity.
    *
    * @param Groupes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Groupes $entity)
    {
        $form = $this->createForm(new GroupesType(), $entity, array(
            'action' => $this->generateUrl('groupes_update', array('id' => $entity->getGroupId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Groupes entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Groupes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Groupes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('groupes_edit', array('id' => $id)));
        }

        return $this->render('FreelancerBundle:Groupes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Groupes entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FreelancerBundle:Groupes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Groupes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('groupes'));
    }

    /**
     * Creates a form to delete a Groupes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('groupes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
