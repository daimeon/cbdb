<?php

namespace App\Controller;

use App\Entity\Comic;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ComicController extends Controller
{

    /**
     * @param $comic_id
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/comic/details/{comic_id}", name="comic")
     */
    public function index($comic_id)
    {
        /** @var Comic $comic */
        $comic = $this->getDoctrine()
            ->getRepository(Comic::class)
            ->find($comic_id);

        return $this->render('comic/details.html.twig', [
            'controller_name' => 'ComicController',
            'comic'           => $comic,
        ]);
    }
}
