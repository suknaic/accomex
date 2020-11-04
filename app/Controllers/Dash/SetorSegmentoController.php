<?php

namespace App\Controllers\Dash;

use App\Controllers\Controller;

class SetorSegmentoController extends Controller
{
    public function index($request, $response)
    {
        return $this->view->render($response, 'dashboard/setorsegmento.twig');
    }
}
