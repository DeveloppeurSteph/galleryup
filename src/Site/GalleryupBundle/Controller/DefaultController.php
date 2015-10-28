<?php

namespace Site\GalleryupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SiteGalleryupBundle:Default:index.html.twig', array('name' => $name));
    }
}
