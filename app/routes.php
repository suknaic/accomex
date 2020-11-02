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
	$this->get('/painel/cadastro-empresa', '')->setName('auth.painel.cempresa');
	// ROTAS PRODUTO
	$this->get('/painel/cadastro-produto', '')->setName('auth.painel.cproduto');


	// signout
	$this->get('/painel/signout', 'AuthController:getSignOut')->setName('auth.signout');

	// change password
	$this->get('/painel/password/change', 'PasswordController:getChangePassword')->setName('auth.password.change');
	$this->post('/painel/password/change', 'PasswordController:postChangePassword');
})->add(new AuthMiddelware($container));
