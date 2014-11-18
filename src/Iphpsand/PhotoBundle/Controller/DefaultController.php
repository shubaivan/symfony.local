<?php

namespace Iphpsand\PhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IphpsandPhotoBundle:Default:index.html.twig', array('name' => $name));
    }
}
