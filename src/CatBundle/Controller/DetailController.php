<?php

namespace CatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CatBundle\Repository\CatRepository;

class DetailController extends Controller
{
    /**
     * @Route("/cat/detail")
     */
    public function detailAction()
    {
        $catRepository = new CatRepository;
        $cats = $catRepository->findAllCats();
        
        return $this->render('CatBundle:Cat:detail.html.twig', [
            'cats' => $cats,
        ]);
    }
}
