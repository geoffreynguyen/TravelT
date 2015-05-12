<?php

namespace TT\TravelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('TTTravelBundle:Main:index.html.twig');
    }
}
