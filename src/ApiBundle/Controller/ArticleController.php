<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
  public function getAction($id) {
    $article = $this->container->get('service.article')->get($id);
    return new Response($article);
  }

  public function addAction($name) {
    $article = $this->container->get('service.article')->add($name);
    return new Response($article);
  }

  public function listAction() {
    $jsonListArticle = $this->container->get('service.article')->list();
    echo "je passe";
    return new Response($jsonListArticle);
  }
}
