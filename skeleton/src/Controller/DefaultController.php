<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
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
        // return new Response("my message from show");
        return $this->render('article/show.html.twig', [
        'title' => ucwords(str_replace('-', ' ', $slug)),
    ]);
    }
}

?>