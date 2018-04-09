<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{
  public function loginAction()
  {
    // if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
    //   return $this->redirectToRoute('oc_platform_accueil');
    // }
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return new Response("coucou2");
    }

    $authenticationUtils = $this->get('security.authentication_utils');

    // return $this->render('ApiBundle:Security:login.html.twig', array(
    //   'last_username' => $authenticationUtils->getLastUsername(),
    //   'error'         => $authenticationUtils->getLastAuthenticationError(),
    // ));

    echo ($authenticationUtils->getLastUsername());
    echo ($authenticationUtils->getLastAuthenticationError());
    echo '------------';
    return new Response("hello");
    // $url = $this->container->get('service.user')->login();
    // return new Response($url);
  }
}
