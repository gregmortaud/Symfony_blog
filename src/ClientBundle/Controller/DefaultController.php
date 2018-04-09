<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use GuzzleHttp\Client;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
      // return $this->render('@Client/home.html.twig');

        // $client = new Client(['timeout'  => 10000.0,]);
        // $baseServiceURL = (string)('http://localhost:8005/article/list');
        // $res = $client->request('GET', $baseServiceURL);
        // $res = $client->request('GET', 'http://localhost:8003/article/list');
        // $client = new Client('http://localhost:8006');
        // $client = new Client([
        //     // Base URI is used with relative requests
        //     'base_uri' => 'http://127.0.0.1:8000',
        //     // You can set any number of default request options.
        //     'timeout'  => 10.0,
        // ]);
        // $response = $client->request('GET', '/article/list', ['debug' => true]);
        // $client = new Client();
        // $auth = array(
        //   'content-type' => 'application/json',
        //   'json' => array()
        // );
        // $response = $client->request('GET', 'http://127.0.0.1:8001/article/list', $auth);
        // print_r ($response);
        // $response = $request->send();

        // $jsonListArticle = $this->container->get('api.article')->listAction();
        $jsonListArticle = $this->container->get('service.article')->list();

        $listArticle = json_decode($jsonListArticle);
        return $this->render('@Client/home.html.twig', [
          "listArticle" => $listArticle,
        ]);

        // return $this->render('@Client/home.html.twig', [
        //   "article" => $jsonListArticle,
        // ]);


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
