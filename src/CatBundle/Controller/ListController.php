<?php

namespace CatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CatBundle\Repository\CatRepository;

class ListController extends Controller
{
    /**
     * @Route("/cat")
     */
    public function listAction()
    {
        $catRepository = new CatRepository;
        $cats = $catRepository->findAllCats();
        
        return $this->render('CatBundle:Cat:list.html.twig', [
            'cats' => $cats,
        ]);
    }
}
