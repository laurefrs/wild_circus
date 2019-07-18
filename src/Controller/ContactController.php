<?php
/**
 * Created by PhpStorm.
 * User: laure
 * Date: 2019-07-18
 * Time: 22:42
 */

namespace App\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;


class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request,ObjectManager $objectManager) :Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

              if ($form->isSubmitted() && $form->isValid()) {
                  $objectManager->persist($contact);
                  $objectManager->flush();

               }
            return $this->render('contact_form.html.twig', ['form'=> $form->createView()]);
    }
}