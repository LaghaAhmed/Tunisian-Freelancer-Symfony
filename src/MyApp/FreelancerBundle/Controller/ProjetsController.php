<?php

namespace MyApp\FreelancerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MyApp\FreelancerBundle\Entity\Projets;
use MyApp\FreelancerBundle\Form\ProjetsType;

/**
 * Projets controller.
 *
 */
class ProjetsController extends Controller
{

    /**
     * Lists all Projets entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FreelancerBundle:Projets')->findAll();

        return $this->render('FreelancerBundle:Projets:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Projets entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Projets();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('projets_show', array('id' => $entity->getId())));
        }

        return $this->render('FreelancerBundle:Projets:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Projets entity.
     *
     * @param Projets $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Projets $entity)
    {
        $form = $this->createForm(new ProjetsType(), $entity, array(
            'action' => $this->generateUrl('projets_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Projets entity.
     *
     */
    public function newAction()
    {
        $entity = new Projets();
        $form   = $this->createCreateForm($entity);

        return $this->render('FreelancerBundle:Projets:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Projets entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Projets')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projets entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FreelancerBundle:Projets:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Projets entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Projets')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projets entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FreelancerBundle:Projets:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Projets entity.
    *
    * @param Projets $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Projets $entity)
    {
        $form = $this->createForm(new ProjetsType(), $entity, array(
            'action' => $this->generateUrl('projets_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Projets entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerBundle:Projets')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projets entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('projets_edit', array('id' => $id)));
        }

        return $this->render('FreelancerBundle:Projets:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Projets entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FreelancerBundle:Projets')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Projets entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('projets'));
    }

    /**
     * Creates a form to delete a Projets entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('projets_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
         public function ajoutAction($id,$jobowner)
    {
        $Request = $this->getRequest();
        if($Request->getMethod()=="POST")
        {
            //instantiation de Modele
 
            //Recuperation des données
            $Modele = new \MyApp\JobownerBundle\Entity\Projetv();
            $user = $this->container->get('security.context')->getToken()->getUser();
            $freelancer=$user->getUsername();
            $Modele->setFreelancer($freelancer);
            $Modele->setJobowner ($jobowner);
            $Modele->setProjetid ($id);
            //instantiation de l'em
            $em = $this->getDoctrine()->getManager();
            $em->persist($Modele);
            $em->flush();
        }
        return $this->render('JobownerBundle:Projets:affecter.html.twig', array());
    }
}
