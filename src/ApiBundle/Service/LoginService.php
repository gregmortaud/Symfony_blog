<?php

namespace ApiBundle\Service;

// use UserBundle\Entity\Article;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
// use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


use Symfony\Component\HttpFoundation\Request;

class LoginService
{
  // private $em;
  //
  // public function __construct(EntityManagerInterface $manager)
  // {
  //   $this->em = $manager;
  // }

  public function login() {
    // Si le visiteur est déjà identifié, on le redirige vers l'accueil
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return "déjà connecté";
    }

    // Le service authentication_utils permet de récupérer le nom d'utilisateur
    // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
    // (mauvais mot de passe par exemple)
    $authenticationUtils = $this->get('security.authentication_utils');
    return "connection complete";

    // return $this->render('login.html.twig', array(
    //   'last_username' => $authenticationUtils->getLastUsername(),
    //   'error'         => $authenticationUtils->getLastAuthenticationError(),
    // ));

  }
}
