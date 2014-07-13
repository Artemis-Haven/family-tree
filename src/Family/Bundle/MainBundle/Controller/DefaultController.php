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
        return $this->render('FamilyMainBundle:Default:allFamilies.html.twig');
    }

    public function myFamilyAction()
    {
        return $this->render('FamilyMainBundle:Default:myFamily.html.twig');
    }
}
