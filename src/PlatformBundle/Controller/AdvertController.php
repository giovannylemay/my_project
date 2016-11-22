<?php

namespace PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('PlatformBundle:Advert:index.html.twig', array('nom' => 'Giovanny'));
        return new Response($content);
    }
}
