<?php

namespace Alura\Phppsr\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class FormularioInsercao implements RequestHandlerInterface
{
    private $entityManager;

    public function __construct($entityManager)
    {
        $this->$entityManager = $entityManager;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $html = 'teste';
        return new Response(200, ['Location' => 'http://alura.com.br'], $html);
    }
}
