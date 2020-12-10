<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompanyController extends AbstractController
{
    /**
     * @Route("/", name="company")
     */
    public function index(): Response
    {
        return $this->render('company/index.html.twig', [
        ]);
    }
    /**
     * @Route("/description", name="description")
     */
    public function description(): Response
    {
        return $this->render('company/description.html.twig');
    }
}
