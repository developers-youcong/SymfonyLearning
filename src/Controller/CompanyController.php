<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CompanyController extends AbstractController
{
/**
     * Matches /about exactly
     *
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('blog/about.html.twig');
    }
}