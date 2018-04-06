<?php

namespace ApiBundle\Service;

use ApiBundle\Entity\Article;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Doctrine\ORM\EntityManagerInterface;

class ArticleService
{
  private $em;

  public function __construct(EntityManagerInterface $manager)
  {
    $this->em = $manager;
  }

  public function get($id) {
    echo "Service Article get ";
    return ($id);
  }

  public function add($name) {

    $article = new Article();
    $article->setName($name);
    $article->setText("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");

    $this->em->persist($article);
    $this->em->flush();
    return ("Article $name added!");
  }

  public function list() {
    $repository = $this->em->getRepository(Article::class);

    $listArticle = $repository->findAll();

    $encoders = array(new XmlEncoder(), new JsonEncoder());
    $normalizers = array(new ObjectNormalizer());
    $serializer = new Serializer($normalizers, $encoders);

    $jsonListArticle = $serializer->serialize($listArticle, 'json');

    return ($jsonListArticle);
  }
}
