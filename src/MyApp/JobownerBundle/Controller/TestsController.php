<?php

namespace blitz\frontOffice\freelancerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use blitz\frontOffice\freelancerBundle\Entity\Tests;
use blitz\frontOffice\freelancerBundle\Form\TestsType;

/**
 * Tests controller.
 *
 */
class TestsController extends Controller
{

    /**
     * Lists all Tests entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('freelancerAmineBundle:Tests')->findAll();

        return $this->render('freelancerAmineBundle:Tests:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Tests entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Tests();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tests_show', array('id' => $entity->getTestId())));
        }

        return $this->render('freelancerAmineBundle:Tests:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Tests entity.
     *
     * @param Tests $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Tests $entity)
    {
        $form = $this->createForm(new TestsType(), $entity, array(
            'action' => $this->generateUrl('tests_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Tests entity.
     *
     */
    public function newAction()
    {
        $entity = new Tests();
        $form   = $this->createCreateForm($entity);

        return $this->render('freelancerAmineBundle:Tests:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tests entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('freelancerAmineBundle:Tests')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tests entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('freelancerAmineBundle:Tests:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Tests entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('freelancerAmineBundle:Tests')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tests entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritFreelanceBundle:Tests:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Tests entity.
    *
    * @param Tests $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Tests $entity)
    {
        $form = $this->createForm(new TestsType(), $entity, array(
            'action' => $this->generateUrl('tests_update', array('id' => $entity->getTestId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Tests entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('freelancerAmineBundle:Tests')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tests entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tests_edit', array('id' => $id)));
        }

        return $this->render('freelancerAmineBundle:Tests:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Tests entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('freelancerAmineBundle:Tests')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tests entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tests'));
    }

    /**
     * Creates a form to delete a Tests entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tests_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
