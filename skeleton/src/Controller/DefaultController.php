<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route()
     */
    public function index()
    {
        return new Response('My message!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        
        $comments= [
            'Comment one',
            'comment two',
            'Comment three'
        ];

       
        return $this->render('article/show.html.twig', [
        'title' => ucwords(str_replace('-', ' ', $slug)),
        'comments' => $comments,
    ]);
    
    }
}
?>