<?php
// Routes

//Index
$app->get('/', 'HomeAction:indexAction');

//Login
$app->get('/login', 'HomeAction:loginAction');
$app->post('/login', 'HomeAction:doLoginAction');
$app->get('/logout', 'HomeAction:logoutAction');

//Register
$app->get('/register', 'HomeAction:registerAction');
$app->post('/register', 'HomeAction:doRegisterAction');

//Admin
$app->get('/admin/dashboard', 'AdminAction:indexAction');

//Proprietários
$app->get('/admin/proprietarios', 'ProprietarioAction:indexAction');
$app->get('/admin/proprietarios/{id}', 'ProprietarioAction:getByIdAction');
$app->delete('/admin/proprietarios/{id}', 'ProprietarioAction:deleteAction');

//Inquilinos
$app->get('/admin/inquilinos', 'InquilinoAction:indexAction');

//Imóveis
$app->get('/admin/imoveis', 'ImovelAction:indexAction');

//Imóveis
$app->get('/admin/alugueis', 'ContratoAction:indexAction');
