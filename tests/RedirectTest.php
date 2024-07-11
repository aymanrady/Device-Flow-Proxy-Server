<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectTest extends PHPUnit\Framework\TestCase {

    public static function setUpBeforeClass(): void
    {
        global $templates;
        $templates = new League\Plates\Engine(dirname(__FILE__).'/../views');
    }

    public function testEmptyRequest() {
    $controller = new Controller();

    $request = new Request();
    $response = new Response();
    $response = $controller->redirect($request, $response);

    $html = $response->getContent();
    $this->assertStringContainsString('Invalid Request', $html);
  }

  public function testInvalidState() {
    $controller = new Controller();

    $request = new Request(['code'=>'foo', 'state'=>'foo']);
    $response = new Response();
    $response = $controller->redirect($request, $response);

    $html = $response->getContent();
    $this->assertStringContainsString('Invalid State', $html);
  }

}
