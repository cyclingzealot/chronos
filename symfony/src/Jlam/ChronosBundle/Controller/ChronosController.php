<?php

namespace Jlam\ChronosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jlam\ChronosBundle\Entity\TimeEntry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormBuilder;

class ChronosController extends Controller
{
    public function indexAction()
    {
        $entry = new TimeEntry();
        
        $form = $this->createFormBuilder($entry)
        	->add('minutes', 'number')
        	->getForm();
        
        return  $this->render('JlamChronosBundle:Chronos:form.html.twig', array(
            'form' => $form->createView(),
        ));
        	
    }
}
