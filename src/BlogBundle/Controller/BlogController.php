<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function indexAction($page)
    {
        return $this->render('BlogBundle::index.html.twig', array(
            'page' => $page
        ));
    }

    public function showAction($year, $month, $slug)
    {
        return $this->render('BlogBundle::show.html.twig', array(
            'slug' => $slug
        ));
    }

}
