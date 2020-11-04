<?php

namespace App\Controllers\Dash;

use App\Controllers\Controller;

class UsuarioDetailController extends Controller
{
    public function index($request, $response)
    {
        return $this->view->render($response, 'dashboard/perfil-usuario.twig');
    }
}
