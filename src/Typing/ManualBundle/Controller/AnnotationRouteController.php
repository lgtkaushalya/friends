<?php
namespace Typing\ManualBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
class AnnotationRouteController {

  /**
   * @Route("/annotationRoute")
   */
  public function indexAction() {
    return new Response('Annotation routing works');
  }

}
