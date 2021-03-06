<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function showIndex(Request $request){
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
    * @Route("/category",name="category")
    **/

    public function listCategories(Request $request){

        $client = new \Github\Client();
        $repositories = $client->api('user')->repositories('symfony');

        return $this->render('default/category.html.twig' , 'repositories'=>$repositories );
    }
}
