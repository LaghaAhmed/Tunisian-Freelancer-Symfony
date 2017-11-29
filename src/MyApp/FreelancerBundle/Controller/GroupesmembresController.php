<?php

namespace MyApp\FreelancerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MyApp\FreelancerBundle\Entity\Groupesmembres;
use MyApp\FreelancerBundle\Form\GroupesmembresType;

/**
 * Groupesmembres controller.
 *
 */
class GroupesmembresController extends Controller
{

    /**
     * Lists all Groupesmembres entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FreelancerBundle:Groupesmembres')->findAll();

        return $this->render('FreelancerBundle:Groupesmembres:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Groupesmembres entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Groupesmembres();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('groupesmembres'));
        }

        return $this->render('FreelancerBundle:Groupesmembres:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Groupesmembres entity.
     *
     * @param Groupesmembres $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Groupesmembres $entity)
    {
        $form = $this->createForm(new GroupesmembresType(), $entity, array(
            'action' => $this->generateUrl('groupesmembres_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Groupesmembres entity.
     *
     */
    public function newAction()
    {
        $entity = new Groupesmembres();
        $form   = $this->createCreateForm($entity);

        return $this->render('FreelancerBundle:Groupesmembres:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Groupesmembres entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Groupesmembres')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Groupesmembres entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FreelancerBundle:Groupesmembres:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Groupesmembres entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Groupesmembres')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Groupesmembres entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FreelancerBundle:Groupesmembres:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Groupesmembres entity.
    *
    * @param Groupesmembres $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Groupesmembres $entity)
    {
        $form = $this->createForm(new GroupesmembresType(), $entity, array(
            'action' => $this->generateUrl('groupesmembres_update', array('id' => $entity->getMemberId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Groupesmembres entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Groupesmembres')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Groupesmembres entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('groupesmembres_edit', array('id' => $id)));
        }

        return $this->render('FreelancerBundle:Groupesmembres:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Groupesmembres entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FreelancerBundle:Groupesmembres')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Groupesmembres entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('groupesmembres'));
    }

    /**
     * Creates a form to delete a Groupesmembres entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('groupesmembres_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
