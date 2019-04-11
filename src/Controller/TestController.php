<?php
// src/Controller/TestController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController
{
    // @Route("/test/number")    
    public function number()
    {
        $number = random_int(0, 100);

        return $this->render('test/number.html.twig', [
            'number' => $number
        ]);
    }
}

?>