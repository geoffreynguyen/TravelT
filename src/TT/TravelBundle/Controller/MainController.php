<?php

namespace TT\TravelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('TTTravelBundle:Main:index.html.twig');
    }
    
    public function searchAction(Request $request)
    {
        $form=$this->createFormBuilder()
                ->add('dd', 'date', array('input'=>'datetime',
                                            'widget'=>'choice'))
                
                ->add('dr', 'date', array('input'=>'datetime',
                                            'widget'=>'choice'))
                
                ->add('depart', 'entity', array(
                                                    'class' => 'TTTravelBundle:Ville',
                                                    'property' => 'nom',
                                                    'multiple'=> false,
                                                    'required'=>true))
                ->add('arrivee', 'entity', array(
                                                    'class' => 'TTTravelBundle:Ville',
                                                    'property' => 'nom',
                                                    'multiple'=> false,
                                                    'required'=>true))
                ->getForm();
        
        if($request->getMethod() == 'POST'){
            var_dump('test');
            die;
        }
        
        return $this->render('TTTravelBundle:Main:form.html.twig', array('form'=>$form->createView()));
    }
}
