<?php

namespace App\Controllers\Dash;

use App\Controllers\Controller;

class AtividadesController extends Controller
{
    public function index($request, $response)
    {
        return $this->view->render($response, 'dashboard/atividades.twig');
    }
}
