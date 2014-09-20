<?php

namespace Family\Bundle\TreeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Family\Bundle\TreeBundle\Entity\PersonRepository;
use Family\Bundle\TreeBundle\Entity\Relation;

class ParentsType extends AbstractType
{    
    private $personId;

    private $familyId;

    public function __construct($personId, $familyId) {
        $this->personId = $personId;
        $this->familyId = $familyId;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $personId = $this->personId;
        $familyId = $this->familyId;
        $builder
            ->add('firstPerson', 'entity', array(
                'class' => 'FamilyTreeBundle:Person', 
                'query_builder' => function(PersonRepository $er) use ($personId, $familyId){
                    return $er->getPotentialParentsQB($personId, $familyId); },
                'label' => 'Parent 1',
                'empty_value' => 'Sélectionnez le premier parent :',
                'required' => false
            ))
            ->add('secondPerson', 'entity', array(
                'class' => 'FamilyTreeBundle:Person', 
                'query_builder' => function(PersonRepository $er) use ($personId, $familyId){
                    return $er->getPotentialParentsQB($personId, $familyId); },
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
