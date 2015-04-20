<?php

namespace Jlam\ChronosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JlamChronosBundle:Default:index.html.twig', array('name' => $name));
    }
}
