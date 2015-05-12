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
        if($request->getMethod() == 'POST'){
            var_dump('test');
            die;
        }
        
        return $this->render('TTTravelBundle:Main:form.html.twig');
    }
}
