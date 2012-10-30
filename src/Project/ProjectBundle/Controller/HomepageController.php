<?php

namespace Project\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
    	// if($name) {
	    //     return $this->render('PBundle:Homepage:index.html.twig', array('name' => $name));
    	// } else return $this->render('PBundle:Homepage:index.html.twig');

    	$user = $this->container->get('fos_user.user_manager')->findUserByUsername('nenad');

    	echo "<pre>";
    	print_r($user);
    	echo "</pre>";
    	exit;

    	return $this->render('PBundle:Homepage:index.html.twig');
    }
}
