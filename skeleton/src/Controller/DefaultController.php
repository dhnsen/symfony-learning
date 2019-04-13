<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route()
     */
    public function index()
    {
        $title = "Example Page";
        $comments = [
            'Comment one',
            'Comment two',
            'Comment three'
        ];

       
        return $this->render('article/show.html.twig', [
        'title' => ucwords(str_replace('-', ' ', $title)),
        'comments' => $comments,
    ]);
    }

}
?>