<?php

namespace Project\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction($name)
    {
    	if($name) {
	        return $this->render('PBundle:Homepage:index.html.twig', array('name' => $name));
    	} else return $this->render('PBundle:Homepage:index.html.twig');
    }
}
