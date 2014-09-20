<?php

namespace Family\Bundle\TreeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Family\Bundle\TreeBundle\Entity\Relation;

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
        $personId = $options['data']->getId();
        $builder
            ->add('firstName', 'text', array(
                'label'    => 'Prénom',
                'required' => false,
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
            ));
            if ($options['withMates']) {
                $builder->add('relations', 'collection', array(
                    'type' => new MateType($personId), 
                    'allow_add' => true,
                    'allow_delete' => true,
                    'prototype' => true,
                ));
            }
            $builder->add('parentsRelation',  new ParentsType($personId, $options['familyId']));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Family\Bundle\TreeBundle\Entity\Person',
            'withMates'  => false,
            'familyId'  => null
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
