<?php

namespace ApiBundle\Service;

class ArticleService
{
  public function get($id) {
    echo "Service Article get ";
    return ($id);
  }

  public function add() {
    echo "Service Article add ";
    return ("test");
  }
}
