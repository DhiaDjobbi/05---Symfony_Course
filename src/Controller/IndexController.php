<?php 

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController 
{

    /**
     * @Route("/page/{name}")
     */
    public function homepage($name) 
    {
           
            return $this->render("home/index.html.twig", [
                "essem" => $name,
                
            ] );
    }



}