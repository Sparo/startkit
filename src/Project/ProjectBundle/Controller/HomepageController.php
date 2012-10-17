<?php

namespace Project\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        // return $this->render('PBundle:Homepage:index.html.twig', array('name' => $name));
        return $this->render('PBundle:Homepage:index.html.twig');
    }
}
