<?php

namespace MyApp\FreelancerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjetsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('categorie')
            ->add('nombreFreelancer')
            ->add('level')
            ->add('typecontrat')
            ->add('salaire')
            ->add('duree')
            ->add('etat')
            ->add('username')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\FreelancerBundle\Entity\Projets'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'myapp_freelancerbundle_projets';
    }
}
