<?php
namespace Friends\ProfileBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RoutingTestController extends Controller {

  public function routingTestAction(Request $request) {
    $session = $request->getSession();

    if ($request->query->get('name')) {
      $session->set('name', $request->query->get('name'));
      $userName = $session->get('name');
    } elseif ($session->get('name')) {
      $userName = $session->get('name');
    } else {
      throw $this->createNotFoundException('User cannot be recognized');
    }

    return new Response('Welcome '.$userName.' to Routing'); 
  }
}
