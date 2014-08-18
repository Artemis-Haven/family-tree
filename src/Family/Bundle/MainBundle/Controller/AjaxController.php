<?php

namespace Family\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
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

}
