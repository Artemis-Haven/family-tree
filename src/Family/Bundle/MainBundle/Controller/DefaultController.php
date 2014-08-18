<?php

namespace Family\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
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
        return $this->render('FamilyMainBundle:Default:myFamily.html.twig');
    }

    public function familyAction($id)
    {
        if ($this->getUser() != null and $this->getUser()->getPerson()->getFamily()->getId() == $id) {
            return $this->redirect($this->generateUrl('family_main_myFamily'));
        } else {
            $em = $this->getDoctrine()->getEntityManager();

            $family = $em->getRepository('FamilyTreeBundle:Family')->find($id);

            if (!$family) {
                throw $this->createNotFoundException('Unable to find Family entity.');
            }

            return $this->render('FamilyMainBundle:Default:family.html.twig', array(
                'family'      => $family,
            ));
        }
    }

    public function familySettingsAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $family = $em->getRepository('FamilyTreeBundle:Family')->find($id);

        if (!$family) {
            throw $this->createNotFoundException('Unable to find Family entity.');
        }

        return $this->render('FamilyMainBundle:Default:familySettings.html.twig', array(
            'family'      => $family,
        ));
    }

    public function personAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $person = $em->getRepository('FamilyTreeBundle:Person')->find($id);

        if (!$person) {
            throw $this->createNotFoundException('Unable to find Person entity.');
        }

        return $this->render('FamilyMainBundle:Default:person.html.twig', array(
            'person'      => $person,
        ));
    }
}
