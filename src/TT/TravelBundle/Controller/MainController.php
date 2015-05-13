<?php

namespace TT\TravelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TT\TravelBundle\Form\SearchType;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('TTTravelBundle:Main:index.html.twig');
    }
    
    public function searchAction(Request $request)
    {
        
        $form=$this->createForm(new SearchType());
               
        
        if($form->handleRequest($request)->isValid()){
           
           $search=$form->getData();
           $em = $this->getDoctrine()->getManager();
           $listeTrains = $em->getRepository('TTTravelBundle:Train')
                            ->getListeTrains($search);
           
           return $this->render('TTTravelBundle:Main:listeTrain.html.twig', array('listeTrains'=>$listeTrains, 'search'=>$search));
        }
        
        return $this->render('TTTravelBundle:Main:form.html.twig', array('form'=>$form->createView()));
    }
}
