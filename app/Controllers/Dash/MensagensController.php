<?php

namespace App\Controllers\Dash;

use App\Controllers\Controller;

class MensagensController extends Controller
{
    public function index($request, $response)
    {
        return $this->view->render($response, 'dashboard/mensagens.twig');
    }
}
