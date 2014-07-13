<?php

namespace Family\Bundle\TreeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FamilyTreeBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function familyAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $family = $em->getRepository('FamilyTreeBundle:Family')->find($id);

        return $this->render('FamilyTreeBundle:Default:family.html.twig', array('family' => $family));
    }
    
    public function treeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $people = $em->getRepository('FamilyTreeBundle:Person')->find($id);

        return $this->render('FamilyTreeBundle:Tree:tree.html.twig', array('people' => $people,));
    }
    
    public function treeAscAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
        $person = $em->getRepository('FamilyTreeBundle:Person')->find($id);

        return $this->render('FamilyTreeBundle:Tree:treeAsc.html.twig', array('person' => $person,));
    }
    
    public function treeDescAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $person = $em->getRepository('FamilyTreeBundle:Person')->find($id);

        return $this->render('FamilyTreeBundle:Tree:treeDesc.html.twig', array('person' => $person,));
    }
    
    public function treeCoupleCenteredAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $relation = $em->getRepository('FamilyTreeBundle:Relation')->find($id);

        return $this->render('FamilyTreeBundle:Tree:treeCoupleCentered.html.twig', array('relation' => $relation,));
    }

    public function getAllChildrenFromRelationAction($relationId)
    {
    	$em = $this->getDoctrine()->getManager();
        $relation = $em->getRepository('FamilyTreeBundle:Relation')->find($relationId);

        return $this->render('FamilyTreeBundle:Tree:allChildren.html.twig', array('relation' => $relation));
    }

    public function getAllChildrenRelationLinksAction($relationId)
    {
        $em = $this->getDoctrine()->getManager();
        $relation = $em->getRepository('FamilyTreeBundle:Relation')->find($relationId);

        return $this->render('FamilyTreeBundle:Tree:allChildrenRelationLinks.html.twig', array('relation' => $relation));
    }

    public function getPersonCardAction($personId)
    {
        $em = $this->getDoctrine()->getManager();
        $person = $em->getRepository('FamilyTreeBundle:Person')->find($personId);

        return $this->render('FamilyTreeBundle:Tree:personCard.html.twig', array('person' => $person));
    }
    
    public function personAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $person = $em->getRepository('FamilyTreeBundle:Person')->find($id);

        return $this->render('FamilyTreeBundle:Default:person.html.twig', array('person' => $person));
    }
    
    public function relationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $relation = $em->getRepository('FamilyTreeBundle:Relation')->find($id);

        return $this->render('FamilyTreeBundle:Default:union.html.twig', array('relation' => $relation));
    }
}