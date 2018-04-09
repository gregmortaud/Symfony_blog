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

  public function list() {
    echo "hello world";

    return ("coucou");
  }
}
