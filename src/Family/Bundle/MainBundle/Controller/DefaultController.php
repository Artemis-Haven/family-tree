<?php

namespace Family\Bundle\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Family\Bundle\TreeBundle\Form\FamilySettingsType;
use Family\Bundle\TreeBundle\Entity\Family as Family;

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

        $person = $em->getRepository('FamilyTreeBundle:Person')->find($id);

        if (!$person) {
            throw $this->createNotFoundException('Unable to find Person entity.');
        }

        return $this->render('FamilyMainBundle:Default:person.html.twig', array(
            'person'      => $person,
        ));
    }
}
