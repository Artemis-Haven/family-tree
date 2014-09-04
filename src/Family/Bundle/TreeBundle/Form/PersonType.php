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
        $isAlive = ($options['data']->getDeathDate() != null);
        $lastName = $options['data']->getSex() == 'F' ? 'Nom de jeune fille' : 'Nom de famille';
        $builder
            ->add('firstName', 'text', array(
                'label'    => 'Prénom',
                'required' => false
            ))
            ->add('middleNames', 'text', array(
                'label'    => 'Autres prénoms',
                'required' => false
            ))
            ->add('lastName', 'text', array(
                'label'    => $lastName,
                'required' => false
            ))
            ->add('surName', 'text', array(
                'label'    => 'Surnoms ou titres',
                'required' => false
            ))
            ->add('birthDate', 'date', array(
                'input'    => 'datetime',
                'widget'   => 'choice',
                'years'    => range(1700, 2014),
                'label'    => 'Date de naissance',
                'required' => false
            ))
            ->add('isAlive', 'checkbox', array(
                'label'     => 'Personne décédée',
                'required'  => false,
                'mapped'    => false,
                'data'      => $isAlive,
            ))
            ->add('deathDate', 'date', array(
                'input'    => 'datetime',
                'widget'   => 'choice',
                'years'    => range(1700, 2014),
                'label'    => 'Date du déces',
                'required' => false,
            ))
            ->add('notes', 'textarea', array(
                'required' => false, 
            ))
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
