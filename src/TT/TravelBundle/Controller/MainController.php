<?php

namespace TT\TravelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TT\TravelBundle\Entity\Billet;
use TT\TravelBundle\Entity\Train;
use TT\TravelBundle\Form\BilletType;
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
    
    public function commandeAction(Train $train, Request $request){
         $billet = new Billet();
        $form=$this->createForm(new BilletType(), $billet);
                  
         if($form->handleRequest($request)->isValid()){
  
              $em=$this->getDoctrine()->getManager();
                $billet->setTrain($train->getId());
                $em->persist($billet);
                $em->flush();
   
            $request->getSession()->getFlashBag()->add('info', "Votre réservation est validée");
             return $this->render('TTTravelBundle:Main:index.html.twig');
         }
         
        return $this->render('TTTravelBundle:Main:commande.html.twig', array('form'=>$form->createView(),'train'=>$train));
    }
}
