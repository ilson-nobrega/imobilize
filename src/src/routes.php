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

$app->get('/admin/proprietarios', 'ProprietarioAction:indexAction');