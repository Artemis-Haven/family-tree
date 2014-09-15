<?php

namespace Family\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FamilyUserBundle:Default:index.html.twig', array('name' => $name));
    }

    public function userSettingsAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
		$user = $this->getUser();

        return $this->render('FamilyMainBundle:Person:userSettings.html.twig', array(
        ));
    }
}
