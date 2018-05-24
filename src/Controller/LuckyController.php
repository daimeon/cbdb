<?php

namespace App\Controller;

use App\Entity\Comic;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number/{max}")
     */
    public function number($max)
    {
        $comic = new Comic();
        $comic->setIssueTitle('Just some test');
        $comic->setIssueNumber(1);
        var_dump($comic);die;
        $number = mt_rand(0, $max);

        return $this->render('lucky/number.html.twig', [
            'controller_name' => 'LuckyController',
            'number'          => $number,
            'max'             => $max
        ]);
    }
}
