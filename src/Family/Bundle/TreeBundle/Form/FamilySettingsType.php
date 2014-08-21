<?php

namespace Family\Bundle\TreeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Family\Bundle\TreeBundle\Entity\Family as Family;
use Family\Bundle\TreeBundle\Model\FamilySettings;

class FamilySettingsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', "text", array(
                    'label' => "Titre de la famille"
                ))
            ->add('privacy', 'choice', array(
                    'choices'  => FamilySettings::$privacyList,
                    'required' => true,
                    'data'     => $options['privacyIndex'],
                    'label'    => "Confidentialité"
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Family\Bundle\TreeBundle\Entity\Family',
            'cascade_validation' => true, //needed to validate embeed forms.
            'validation_groups' => array('registration'), //use of validation groups.
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention' => 'family_settings',

            'privacyIndex' => null,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'family_settings';
    }
}
