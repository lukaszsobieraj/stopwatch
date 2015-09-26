<?php

namespace WatchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class WatchController extends Controller {

    public function testAction() {

        return $this->render('WatchBundle:Default:watch.html.twig');
    }

    public function watchAction() {
        
        $watch = $this->get('watcher');
        
        return new \Symfony\Component\HttpFoundation\Response($watch->watch());
        
    }

}
