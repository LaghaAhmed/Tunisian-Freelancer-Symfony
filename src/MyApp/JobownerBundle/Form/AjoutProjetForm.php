<?php

namespace MyApp\JobownerBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class AjoutProjetForm extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('titre', 'text', array('label' => 'Titre','attr' => array('class'=>'form-control')))
                  ->add('description', 'choice', array(
                     'choices' => array('Baser sur une personne' => 'Baser sur une personne', 'Baser sur deux personne' => 'Baser sur deux personne', 'Baser sur trois personnes' => 'Baser sur trois personnes', 'Baser sur trois personnes' => 'Baser sur trois personnes', 'Baser sur quatre personnes' => 'Baser sur quatre personnes', 'Baser sur cinq personnes' => 'Baser sur cinq personne'),'attr' => array('class'=>'form-control')))    
            
       
                 ->add('categorie', 'choice', array(
                     'choices' => array('Projet WEB' => 'Projet WEB', 'Projet JAVA' => 'Projet JAVA', 'Projet Mobile' => 'Projet Mobile'),'attr' => array('class'=>'form-control')))    
            
       
                ->add('level', 'text', array('label' => 'Level','attr' => array('class'=>'form-control')))
                ->add('typeContrat', 'choice', array(
                     'choices' => array('CVP' => 'CVP'),'attr' => array('class'=>'form-control')))    
            
                ->add('duree', 'text', array('label' => 'Duree','attr' => array('class'=>'form-control')))
                ->add('salaire', 'integer', array('label' => 'Salaire','attr' => array('class'=>'form-control')))
                ->add('Valider','submit', array('attr' => array('class'=>'btn btn-primary')));
                
    }
    public function getName() {
        return 'AjoutProjet';
    }
    
}