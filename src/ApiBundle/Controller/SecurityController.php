<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{

  /**
  * @Route("/login", name="login")
  */
  public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
  {
    echo $request;
    echo ('------------------');
    print_r ($authenticationUtils);
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      // return new Response(echo $request);
      return new Response("déjà connecté");
    }

    $authenticationUtils = $this->get('security.authentication_utils');
    // return new Response(echo $request);
    return new Response("connection completed");

    // if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
    //   return $this->redirectToRoute('oc_platform_accueil');
    // }

    // if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
    //   return new Response("coucou2");
    // }

    // $authenticationUtils = $this->get('security.authentication_utils');

    // return $this->render('ApiBundle:Security:login.html.twig', array(
    //   'last_username' => $authenticationUtils->getLastUsername(),
    //   'error'         => $authenticationUtils->getLastAuthenticationError(),
    // ));

    // print_r ($authenticationUtils);
    // echo ($authenticationUtils->getLastUsername());
    // echo ($authenticationUtils->getLastAuthenticationError());
    // echo '------------';
    // return new Response("hello");
    // $url = $this->container->get('service.user')->login();
    // return new Response($url);
  }
}
