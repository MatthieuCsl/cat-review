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
        
        $listHtml = '';
        
        foreach ($cats as $cat) {
            $listHtml .= '<li>'.strtoupper($cat).'</li>';
        }
        
        $html = "
            <html>
                <head></head>
                <body>
                    <h1>Liste des chats</h1>
                    <ul>
                        $listHtml
                    </ul>
                </body>
            </html>
        ";
        
        print $html;
    }
}
