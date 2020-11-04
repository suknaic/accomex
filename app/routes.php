<?php

use App\Middelware\AuthMiddelware;
use App\Middelware\GuestMiddelware;

$app->group('', function () {
	$this->get('/', 'HomeController:index')->setName('home');
});

// when a user is signed in
$app->group('', function () {
	// signup routes
	$this->get('/cadastro', 'AuthController:getSignUp')->setName('auth.signup');
	$this->post('/cadastro', 'AuthController:postSignUp');

	// signin routes
	$this->get('/login', 'AuthController:getSignIn')->setName('auth.signin');
	$this->post('/login', 'AuthController:postSignIn');
})->add(new GuestMiddelware($container));

// when the user isn't signed in
$app->group('', function () {

	// DASHBOARD ROUTES
	$this->get('/painel', 'PainelController:index')->setName('auth.painel');

	//ROTAS EMPRESA 
	$this->get('/painel/cadastro-empresa', 'EmpresaController:index')
		->setName('auth.painel.cempresa');
	// ROTAS PRODUTO
	$this->get('/painel/cadastro-produto', 'ProdutoController:index')
		->setName('auth.painel.cproduto');

	//ROTAS SEGMENTOS
	$this->get('/painel/cadastro-setor', '')->setName('auth.painel.csegmento');

	//ROTAS DE MENSAGENS DO SISTEMA
	$this->get('/painel/mensagens', 'MensagensController:index')
		->setName('auth.painel.mensagens');

	// ROTAS DE ATIVIDADES DO SISTEMA
	$this->get('/painel/atividades', 'AtividadesController:index')
		->setName('auth.painel.task');

	// ROTAS DE CONTROLE DE USUARIOS
	$this->get('/painel/usuarios', 'UsuariosController:index')->setName('auth.painel.users');
	$this->get('/painel/perfil-usuaril', 'UsuarioDetailController:index')
		->setName('auth.painel.user-detail');


	// signout
	$this->get('/painel/signout', 'AuthController:getSignOut')->setName('auth.signout');


	// change password
	$this->get('/painel/password/change', 'PasswordController:getChangePassword')->setName('auth.password.change');
	$this->post('/painel/password/change', 'PasswordController:postChangePassword');
	// })->add(new AuthMiddelware($container));
	// ADICIONAR O MIDDLEWARE ACIMA PARA ATIVA A AUTHENTICACAO
});
