<?php
/**
 * Created by PhpStorm.
 * User: laure
 * Date: 2019-07-16
 * Time: 15:16
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ImageRepository;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('layout/base.html.twig');

    }
    /**
     * @Route("/galerie", name="galerie")
     */
    public function galleryShow(ImageRepository $imageRepository) : Response
    {
        $images = $imageRepository->findAll();
        return $this->render('gallery.html.twig',
            ['images'=> $images]
        );
    }
    /**
     * @Route("/tarifs", name="tarifs")
     */
    public function rates()
    {
        return $this->render('tarif.html.twig');

    }
}