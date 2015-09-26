<?php

namespace WatchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WatchBundle:Default:index.html.twig', array('name' => $name));
    }
}
