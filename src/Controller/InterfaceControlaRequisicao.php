<?php

namespace Alura\Phppsr\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface InterfaceControlaRequisicao
{
    public function processaRequisicao(
        ServerRequestInterface $request
    ): ResponseInterface;
}
