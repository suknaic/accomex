<?php

namespace App\Controllers\Dash;

use App\Controllers\Controller;

class UsuariosController extends Controller
{
    public function index($request, $response)
    {
        return $this->view->render($response, 'dashboard/usuarios.twig');
    }
}
