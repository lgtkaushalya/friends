<?php
namespace Friends\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class RequestResponseController extends Controller {
  public function indexAction() {
    $request = Request::createFromGlobals();
    $name = $request->query->get('name');

    //$html = $this->render('FriendsProfileBundle:RequestResponse:request_response.html.twig', array('name' => $name));
    $html = $this->render('FriendsProfileBundle:RequestResponse:request_response.html.php', array('name' => $name));

    $response = new Response();
    $response->setContent($html);
    $response->headers->set('Content-Type', 'text/html');
    return $response;
  }
}
