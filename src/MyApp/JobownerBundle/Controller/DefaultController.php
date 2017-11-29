<?php

namespace MyApp\JobownerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JobownerBundle:Default:index.html.twig', array('name' => $name));
    }
}
