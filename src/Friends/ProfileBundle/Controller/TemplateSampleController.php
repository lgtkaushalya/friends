<?php

namespace Friends\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class TemplateSampleController extends Controller {
  public function printListAction() {
    $blogList = array(
      array('title' => 'Introduction to Symfony', 'created_by' => 'John', 'visible' => true, 'rating' => 2),
      array('title' => 'Symfony legacy system', 'created_by' => 'Stew', 'visible' => false, 'rating' => 5),
      array('title' => 'Routing System', 'created_by' => 'Robins', 'visible' => true, 'rating' => 5),
      array('title' => 'Templating', 'created_by' => 'Mara', 'visible' => true, 'rating' => 4)
    );

    $message = '<div>Notification</div>';
    $html = $this->render("FriendsProfileBundle:TemplateSample:index.html.twig", array('blogList' => $blogList, 'message' => $message));

    return new Response($html);
  }
}
