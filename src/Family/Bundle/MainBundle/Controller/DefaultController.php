<?php

namespace Family\Bundle\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Family\Bundle\TreeBundle\Form\FamilySettingsType;
use Family\Bundle\TreeBundle\Entity\Family as Family;
use Family\Bundle\TreeBundle\Form\PersonType;
use Family\Bundle\TreeBundle\Entity\Person as Person;
use Family\Bundle\UserBundle\Entity\FamilyAccessCode;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        // Si la personne est connectée mais qu'elle n'appartient à aucune famille
        if ($this->getUser() != null && $this->getUser()->getPerson() == null) {

            $form = $this->createFormBuilder()
                ->add('code', 'text', array('label' => 'Code d\'accès'))
                ->getForm();

            $form->handleRequest($request);
            $error = null;

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $string = $form->get('code')->getData();
                $code = $em->getRepository('FamilyUserBundle:FamilyAccessCode')->findOneByCode($string);
                if ($code != null && $code->isSpent() == false) {
                    $person = new Person();
                    $em->persist($person);
                    $person->setUser($this->getUser());
                    $this->getUser()->setPerson($person);
                    $code->getFamily()->addPerson($person);
                    $code->setSpent(true);
                    $em->flush();
                    return $this->redirect($this->generateUrl('family_main_myPerson'));
                } else {
                    $error = "Ce code est invalide.";
                }
            }

            return $this->render('FamilyMainBundle:Default:index.html.twig', array(
                'form'  => $form->createView(), 
                'error' => $error
            ));
        }

        return $this->render('FamilyMainBundle:Default:index.html.twig');
    }

    public function allFamiliesAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $families = $em->getRepository('FamilyTreeBundle:Family')->findAll();

        if (!$families) {
            throw $this->createNotFoundException('Unable to find Family entities.');
        }

        return $this->render('FamilyMainBundle:Default:allFamilies.html.twig', array(
            'families'      => $families,
        ));
    }

    public function myFamilyAction()
    {
        $id = $this->getUser()->getPerson()->getFamily()->getId();
        $em = $this->getDoctrine()->getEntityManager();

        $persons = $em->getRepository('FamilyTreeBundle:Person')->findByFamilyOrderedByName($id);

        if (!$persons) {
            throw $this->createNotFoundException('Unable to find Family members.');
        }

        return $this->render('FamilyMainBundle:Default:myFamily.html.twig', array(
            'persons'      => $persons,
        ));
    }

    public function familyAction($id)
    {
        if ($this->getUser() != null and $this->getUser()->getPerson()->getFamily()->getId() == $id) {
            return $this->redirect($this->generateUrl('family_main_myFamily'));
        } else {
            $em = $this->getDoctrine()->getEntityManager();

            $family = $em->getRepository('FamilyTreeBundle:Family')->find($id);
            $persons = $em->getRepository('FamilyTreeBundle:Person')->findByFamilyOrderedByName($id);

            if (!$family) {
                throw $this->createNotFoundException('Unable to find Family entity.');
            }

            return $this->render('FamilyMainBundle:Default:family.html.twig', array(
                'family'      => $family,
                'persons'     => $persons
            ));
        }
    }

    public function familyNamesCloudAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $family = $em->getRepository('FamilyTreeBundle:Person')->findAllFrequenciesForFamily($id);

        if (!$family) {
            throw $this->createNotFoundException('Unable to find Family entity.');
        }

        return $this->render('FamilyMainBundle:Default:familyNamesCloud.html.twig', array(
            'family'      => $family,
        ));
    }

    public function familySettingsAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $family = $em->getRepository('FamilyTreeBundle:Family')->find($id);

        if (!$family) {
            throw $this->createNotFoundException('Unable to find Family entity.');
        }

        $form = $this->createForm(new FamilySettingsType(), $family, array(
            'privacyIndex' => $family->getPrivacyIndex()) 
        );
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('family_main_family', array('id' => $id)));
        }

        return $this->render('FamilyMainBundle:Default:familySettings.html.twig', array(
            'family'      => $family,
            'form'        => $form->createView(),
        ));
    }

    public function personAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        if ($this->getUser() != null and $id == $this->getUser()->getPerson()->getId()) {
            return $this->redirect($this->generateUrl('family_main_myPerson'));
        }
        
        $person = $em->getRepository('FamilyTreeBundle:Person')->find($id);

        if (!$person) {
            throw $this->createNotFoundException('Unable to find Person entity.');
        }

        return $this->render('FamilyMainBundle:Person:person.html.twig', array(
            'person'      => $person,
        ));
    }

    public function myPersonAction()
    {
        return $this->render('FamilyMainBundle:Person:person.html.twig', array(
            'person'      => $this->getUser()->getPerson(),
        ));
    }

    public function editPersonAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $person = $em->getRepository('FamilyTreeBundle:Person')->find($id);

        if (!$person) {
            throw $this->createNotFoundException('Unable to find Person entity.');
        }

        $form = $this->createForm(new PersonType(), $person);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('family_main_person', array('id' => $id)));
        }

        return $this->render('FamilyMainBundle:Person:editPerson.html.twig', array(
            'person'      => $person,
            'form'        => $form->createView(),
        ));
    }

    public function newPersonAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $family = $this->getUser()->getPerson()->getFamily();

        if (!$family) {
            throw $this->createNotFoundException('Unable to find Family entity.');
        }
        $person = new Person();
        $form = $this->createForm(new PersonType(), $person);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $family->addPerson($person);
            $em->persist($person);
            $em->flush();

            return $this->redirect($this->generateUrl('family_main_person', array('id' => $person->getId())));
        }

        return $this->render('FamilyMainBundle:Person:newPerson.html.twig', array(
            'family'      => $family,
            'form'        => $form->createView(),
        ));
    }
}
