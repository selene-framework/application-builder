<?php
namespace Selenia\Plugins\ApplicationBuilder\Config;

use Selenia\Plugins\ApplicationBuilder\Controllers\Index;
use Electro\Interfaces\Http\RequestHandlerInterface;
use Electro\Interfaces\Http\RouterInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Routes implements RequestHandlerInterface
{
  /** @var RouterInterface */
  private $router;

  public function __construct (RouterInterface $router)
  {
    $this->router = $router;
  }

  function __invoke (ServerRequestInterface $request, ResponseInterface $response, callable $next)
  {
    return $this->router
      ->add ([
        'application-builder' => Index::class,
      ])
      ->__invoke ($request, $response, $next);
  }

}
