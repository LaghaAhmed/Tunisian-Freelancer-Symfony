<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationFormType extends AbstractType
{
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('label' => 'Nom', 'translation_domain' => 'FOSUserBundle','attr' => array('class'=>'form-control')))
            ->add('prenom', 'text', array('label' => 'Prenom', 'translation_domain' => 'FOSUserBundle','attr' => array('class'=>'form-control')))
                ->add('Adresse', 'text', array('label' => 'Adresse', 'translation_domain' => 'FOSUserBundle','attr' => array('class'=>'form-control')))
            ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle','attr' => array('class'=>'form-control')))
            ->add('Sexe', 'choice', array(
                     'choices' => array('H' => 'Homme', 'F' => 'Femme'), 'translation_domain' => 'FOSUserBundle','attr' => array('class'=>'form-control')))
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle','attr' => array('class'=>'form-control')))
            ->add('age','integer', array('label' => 'Age', 'translation_domain' => 'FOSUserBundle','attr' => array('class'=>'form-control')))
            ->add('plainPassword','repeated', array(
                'type' => 'password',
                    'attr' => array('class'=>'form-control'),
                'options' => array('translation_domain' => 'FOSUserBundle',
                    'attr' => array('class'=>'form-control')),
                'first_options' => array('label' => 'form.password',
                    'attr' => array('class'=>'form-control')),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch'
            ))
                             ->add('roles', 'collection', array(
                   'type' => 'choice','attr' => array('class'=>'form-control'),
                   'options' => array(
                       'choices' => array(
                           'ROLE_FREELANCER' => 'Freelancer',
                           'ROLE_JOBOWNER' => 'Jobowner',
                           'ROLE_ADMIN' => 'Admin'
                       )
                   )
               )
           )
                 ->add('type', 'choice', array('label' => 'Verifier Type',
                     'choices' => array('Admin' => 'Admin', 'Freelancer' => 'Freelancer', 'Jobowner' => 'Jobowner'), 'translation_domain' => 'FOSUserBundle','attr' => array('class'=>'form-control')))
            ->add('photoprofil','file')
            ->add('Montant', 'choice', array('label' => 'Verifier Type',
                     'choices' => array('0' => 'Freelancer', '500' => 'Jobowner'), 'translation_domain' => 'FOSUserBundle','attr' => array('class'=>'form-control')))
        ;
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'intention'  => 'registration',
        ));
    }

    public function getName()
    {
        return 'fos_user_registration';
    }
}
