<?php
/**
 * Created by PhpStorm.
 * User: laure
 * Date: 2019-07-16
 * Time: 15:16
 */

namespace App\Controller;

use App\Repository\ArtistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/artists", name="allArtists")
     */
    public function index(ArtistRepository $artistRepository):Response
    {
        $artists = $artistRepository->findAll();
        return $this->render('artists.html.twig',
        ['artists'=> $artists]
        );

    }
}