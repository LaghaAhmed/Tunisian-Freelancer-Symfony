<?php

namespace MyApp\FreelancerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MyApp\FreelancerBundle\Entity\Feedbacks;
use MyApp\FreelancerBundle\Form\FeedbacksType;

/**
 * Feedbacks controller.
 *
 */
class FeedbacksController extends Controller
{

    /**
     * Lists all Feedbacks entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FreelancerBundle:Feedbacks')->findAll();

        return $this->render('FreelancerBundle:Feedbacks:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Feedbacks entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Feedbacks();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('feedbacks_show', array('id' => $entity->getId())));
        }

        return $this->render('FreelancerBundle:Feedbacks:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Feedbacks entity.
     *
     * @param Feedbacks $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Feedbacks $entity)
    {
        $form = $this->createForm(new FeedbacksType(), $entity, array(
            'action' => $this->generateUrl('feedbacks_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Feedbacks entity.
     *
     */
    public function newAction()
    {
        $entity = new Feedbacks();
        $form   = $this->createCreateForm($entity);

        return $this->render('FreelancerBundle:Feedbacks:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Feedbacks entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Feedbacks')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Feedbacks entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FreelancerBundle:Feedbacks:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Feedbacks entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Feedbacks')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Feedbacks entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FreelancerBundle:Feedbacks:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Feedbacks entity.
    *
    * @param Feedbacks $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Feedbacks $entity)
    {
        $form = $this->createForm(new FeedbacksType(), $entity, array(
            'action' => $this->generateUrl('feedbacks_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Feedbacks entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Feedbacks')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Feedbacks entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('feedbacks_edit', array('id' => $id)));
        }

        return $this->render('FreelancerBundle:Feedbacks:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Feedbacks entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FreelancerBundle:Feedbacks')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Feedbacks entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('feedbacks'));
    }

    /**
     * Creates a form to delete a Feedbacks entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('feedbacks_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
