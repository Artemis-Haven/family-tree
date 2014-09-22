<?php

namespace Family\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Cookie;

class AjaxController extends Controller
{
    public function cookieHideSidebarAction()
    {
        $request = $this->container->get('request');

        if($request->isXmlHttpRequest())
        {
            $value = $request->request->get('hideSidebar');

            // We create a new cookie
            $cookie = new Cookie('hideSidebar', $value, time() + 3600 * 24 * 7);

            // we implement a new response object (be careful! One response object per query!)
            $response = new Response();

            // and we pass it the cookie we have created
            $response->headers->setCookie($cookie);
        }

        // Then we send and return the response
        return $response->send();
    }

    public function deleteRelationAction() 
    {
        $request = $this->container->get('request');
        if($request->isXmlHttpRequest())
        {
            $em = $this->getDoctrine()->getManager();
            $relationId = $request->request->get('relationId');
            $relation = $em->getRepository('FamilyTreeBundle:Relation')->find($relationId);
            $em->remove($relation);
            $em->flush();
        }
        return new Response("");
    }

    public function familySortAction($id)
    {
        $request = $this->container->get('request');
        if($request->isXmlHttpRequest())
        {
            $em = $this->getDoctrine()->getEntityManager();
            $sort = $request->request->get('sort');
            $persRepo = $em->getRepository('FamilyTreeBundle:Person');

            if ($sort == "firstName") {
                $persons = $persRepo->findByFamilyOrderedByFirstName($id);
            } else if ($sort == "birthDate") {
                $persons = $persRepo->findByFamilyOrderedByBirthDate($id);
            } else {
                $persons = $persRepo->findByFamilyOrderedByName($id);
            }

            $result = array();
            foreach ($persons as $p) {
                $item['name'] = $p->__toString();
                $item['fullName'] = $p->getFullName();
                $item['url'] = $this->generateUrl('family_main_person', array('id' => $p->getId()));;
                $result[] = $item;
            }
        }
        return new JsonResponse($result);
    }

    public function sidebarSearchAction()
    {
        $request = $this->container->get('request');
        if($request->isXmlHttpRequest())
        {
            $em = $this->getDoctrine()->getEntityManager();
            $search = $request->request->get('search');
            $persons = $em->getRepository('FamilyTreeBundle:Person')->findWithNameContaining($search);

            $result = array();
            foreach ($persons as $p) {
                $item['value'] = $p->__toString();
                $item['fullName'] = $p->getFullName();
                $item['url'] = $this->generateUrl('family_main_person', array('id' => $p->getId()));;
                $result[] = $item;
            }
            return new JsonResponse($result);
        }
    }

}
