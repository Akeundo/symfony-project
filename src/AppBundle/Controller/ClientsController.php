<?php
// src/AppBundle/Controller/ClientsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClientsController extends Controller
{
/**
 * @Route("/guests", name="index_clients")
 */

    
    public function showIndex()
    {
        
        return $this->render("clients/index.html.twig");
        
    }

    
    public function showDetails()
    {

        

    }

    
    public function showNew()
    {

        
    }

}