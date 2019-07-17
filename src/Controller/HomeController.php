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
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('layout/base.html.twig');

    }
}