<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
    /**
     * Matches /blog exactly
     *
     * @Route("/index", name="index")
     */
    public function index()
{
    // returns '{"username":"jane.doe"}' and sets the proper Content-Type header
    return $this->json(['username' => 'jane.doe']);

    // the shortcut defines three optional arguments
    // return $this->json($data, $status = 200, $headers = [], $context = []);
}
    /**
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog_list")
     */
    public function list()
    {
        return new Response(
            '<html><body>blog_list</body></html>'
        );
    }

    /**
     * Matches /blog/*
     * but not /blog/slug/extra-part
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show()
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        return new Response(
            '<html><body>blog_show</body></html>'
        );

    }

}