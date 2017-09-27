<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $cats = [
            'Frifrou',
            'Shiva',
            'Thalie',
        ];
        
        return $this->render('default/index.html.twig', [
            'base_dir' => "on s'en fout",
        ]);
    }
}
