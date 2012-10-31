<?php

namespace Project\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();

        // echo "<pre>";
        // print_r($user);
        // var_dump($user->getRoles());
        // echo "</pre>";

        // exit;




        if ($user == 'anon.')
            if (!is_object($user) || !$user instanceof UserInterface) {
                return $this->redirect($this->generateUrl('fos_user_security_login'));
            }

        return $this->render('PBundle:Homepage:index.html.twig');
    }
    public function customLoginAction()
    {
        echo 1;
        exit;
    }
}
