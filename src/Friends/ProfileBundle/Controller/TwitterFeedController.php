<?php

namespace Friends\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TwitterFeedController extends Controller {
  public function indexAction() {
    return $this->render('FriendsProfileBundle:TwitterFeed:index.html.php');
  }
}
