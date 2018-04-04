<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class CommentController extends Controller
{
  public function getAction($id) {
    return new Response("Affichage du comment d'id : ".$id);
  }
  public function addAction() {
    return new Response("Comment ajouté");
  }
}
