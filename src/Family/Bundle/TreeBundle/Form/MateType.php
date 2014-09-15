<?php

namespace Family\Bundle\TreeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Family\Bundle\TreeBundle\Entity\PersonRepository;
use Family\Bundle\TreeBundle\Entity\Relation;

class MateType extends AbstractType
{    
    private $id;

    public function __construct($id) {
        $this->id = $id;
    }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $id = $this->id;

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($options, $id)
        {
            $form = $event->getForm();
            $relation = $event->getData();
            $isFinished = false;
            $unionType = null;
            $otherPerson = 'firstPerson';
            if ($relation != null) {
                if ($relation->getEnd() != null) {
                    $isFinished = true;
                }
                if ($relation->getType() != null) {
                    $unionType = $relation->getType();
                }
            }
            if ($relation != null
                && $relation->getFirstPerson() != null 
                && $relation->getFirstPerson()->getId() == $id) {
                $otherPerson = 'secondPerson';
            }

            $form
                ->add($otherPerson, 'entity', array(
                    'class' => 'FamilyTreeBundle:Person', 
                    'query_builder' => function(PersonRepository $er) use ($id){
                        return $er->getPotentialMatesQB($id); },
                    'label' => 'Personne',
                    'empty_value' => 'Sélectionnez un membre de la famille :',
                ))
                ->add('type', 'choice', array(
                    'choices'  => Relation::$unionTypeList,
                    'required' => false,
                    'data'     => $unionType,
                    'label'    => "Type d'union"
                ))
                ->add('start', 'date', array(
                    'input'  => 'datetime',
                    'widget' => 'choice',
                    'required' => false,
                    'years'    => range(1700, 2014),
                    'label' => 'Date de début'
                ))
                ->add('isFinished', 'checkbox', array(
                    'label'     => 'Relation terminée',
                    'required'  => false,
                    'mapped'    => false,
                    'data'      => $isFinished,
                ))
                ->add('end', 'date', array(
                    'input'  => 'datetime',
                    'widget' => 'choice',
                    'required' => false,
                    'years'    => range(1700, 2014),
                    'label' => 'Date de fin'
                ));
        });
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Family\Bundle\TreeBundle\Entity\Relation',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'family_bundle_treebundle_relation';
    }
}
