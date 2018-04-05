<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use ApiBundle\Entity\Article;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
      // return $this->render('@Client/home.html.twig');
        $jsonArticle = $this->container->get('api.article')->list();
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $article = $serializer->deserialize($jsonArticle, Article::class, 'xml');
        return $this->render('@Client/home.html.twig', [
          "article" => $jsonArticle,
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
