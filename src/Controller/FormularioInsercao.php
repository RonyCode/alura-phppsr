<?php

namespace Alura\Phppsr\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

class FormularioInsercao implements InterfaceControlaRequisicao
{
    public function proessaRequisicao(
        ServerRequestInterface $request
    ): ResponseInterface {
        $html = 'teste';
        return new Response(200, [], $html);
    }
}
