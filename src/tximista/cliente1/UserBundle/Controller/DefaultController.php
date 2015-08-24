<?php

namespace tximista\cliente1\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('tximistacliente1UserBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function adminAction()
    {
    	// The second parameter is used to specify on what object the role is tested.
    	$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
    	return new Response('Admin page!');
    }
    
    public function homeAction() {
    	//show default web site
    }
}
