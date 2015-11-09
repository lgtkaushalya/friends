<?php

namespace Friends\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MessageGenerationController extends Controller {
  public function indexAction() {
    $messageGenerator = $this->get('message_generator');
    $message = $messageGenerator->getHelloMessage();
    return new Response($message);
  }
}
