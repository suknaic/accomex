<?php

namespace App\Controllers\Dash;

use App\Controllers\Controller;

class ProdutoController extends Controller
{
    public function index($request, $response)
    {
        return $this->view->render($response, 'dashboard/cproduto.twig');
    }
}
