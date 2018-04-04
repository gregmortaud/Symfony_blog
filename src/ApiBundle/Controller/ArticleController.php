<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
  public function getAction($id) {
    $article = $this->container->get('api.article')->get($id);
    return new Response($article);
  }

  public function addAction() {
    $article = $this->container->get('api.article');
    return new Response($article);
    // return new Response("Article ajouté");
  }
}
