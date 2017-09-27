<?php

namespace CatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/cat")
     */
    public function indexAction()
    {
        return $this->render('CatBundle:Default:index.html.twig');
    }
}
