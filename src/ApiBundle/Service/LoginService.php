<?php

namespace ApiBundle\Service;

// use UserBundle\Entity\Article;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
// use Doctrine\ORM\EntityManagerInterface;

class LoginService
{
  // private $em;
  //
  // public function __construct(EntityManagerInterface $manager)
  // {
  //   $this->em = $manager;
  // }

  public function login() {
    echo "hello world ";

    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('oc_platform_accueil');
    }

    $authenticationUtils = $this->get('security.authentication_utils');

    return $this->render('ApiBundle:Security:login.html.twig', array(
      'last_username' => $authenticationUtils->getLastUsername(),
      'error'         => $authenticationUtils->getLastAuthenticationError(),
    ));

  }
}
