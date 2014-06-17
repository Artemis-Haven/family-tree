<?php

namespace Family\Bundle\TreeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('family')
            ->add('firstName')
            ->add('middleNames')
            ->add('lastName')
            ->add('surName')
            ->add('sex')
            ->add('birthDate', 'date', array(
                    'input'  => 'datetime',
                    'widget' => 'text',
                    'required' => false
                ))
            ->add('deathDate', 'date', array(
                    'input'  => 'datetime',
                    'widget' => 'text',
                    'required' => false
                ))
            ->add('parentsRelation')
            ->add('notes')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Family\Bundle\TreeBundle\Entity\Person'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'family_bundle_treebundle_person';
    }
}
