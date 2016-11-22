<?php

namespace PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class AdvertController extends Controller
{
    public function indexAction()
    {
        //$content = $this->get('templating')->render('PlatformBundle:Advert:index.html.twig', array('nom' => 'Giovanny'));
        $url = $this->get('router')->generate('platform_home', array(), UrlGeneratorInterface::ABSOLUTE_URL);
        $url2 = $this->generateUrl('platform_home');

        return new Response("L'URL de la page home est ".$url2);
    }

    public function viewAction($id)
    {
        return new Response("Affichage de l'annonce n°".$id);
    }


    public function viewSlugAction($slug, $year, $format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$format."."
        );
    }
}
