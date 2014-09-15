<?php

namespace Family\Bundle\TreeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Family\Bundle\TreeBundle\Entity\PersonRepository;
use Family\Bundle\TreeBundle\Entity\Relation;

class ParentsType extends AbstractType
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
        $builder
            ->add('firstPerson', 'entity', array(
                'class' => 'FamilyTreeBundle:Person', 
                'query_builder' => function(PersonRepository $er) use ($id){
                    return $er->getPotentialParentsQB($id); },
                'label' => 'Parent 1',
                'empty_value' => 'Sélectionnez le premier parent :',
                'required' => false
            ))
            ->add('secondPerson', 'entity', array(
                'class' => 'FamilyTreeBundle:Person', 
                'query_builder' => function(PersonRepository $er) use ($id){
                    return $er->getPotentialParentsQB($id); },
                'label' => 'Parent 2',
                'empty_value' => 'Sélectionnez le second parent :',
                'required' => false
        ));
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
