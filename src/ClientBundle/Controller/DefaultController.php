<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
      // return new Response("Affichage Front");
        $article = $this->container->get('api.article')->get(1);
        return $this->render('@Client/Default/index.html.twig', [
          "article" => $article,
        ]);
    }
    /**
     * @Route("/article")
     * @Method({"GET"})
     */
    public function newArticleAction()
    {
      // return new Response("Affichage Front");
        return $this->render('@Client/Default/index.html.twig');
    }
}
