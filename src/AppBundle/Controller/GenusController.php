<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}",name="genus_show")
     */
    public function showAction($genusName)
    {
        $genusName = "*$genusName*";
       // $markup = $this->container->get('markdown.parser')->trasnform($genusName);
        return $this->render('@App/Genus/show.html.twig', ['name' => $genusName]);
    }

    /**
     * @Route("/genus/{genusName}/notes",name="app_genus_get_show")
     * @Method("GET")
     */
    public function getShowAction($genusName)
    {
        $notes = [
            ['id' => '1', 'username' => '11'],
            ['id' => '2', 'username' => '22'],
            ['id' => '3', 'username' => '33'],
        ];

        $data = ['notes' => $notes];

        return new JsonResponse($data);
    }

}
