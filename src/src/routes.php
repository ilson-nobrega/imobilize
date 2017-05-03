<?php
// Routes

//Index
$app->get('/', 'HomeAction:indexAction');

//Login
$app->get('/login', 'HomeAction:loginAction');
$app->post('/login', 'HomeAction:doLoginAction');

//Register
$app->get('/register', 'HomeAction:registerAction');
$app->post('/register', 'HomeAction:doRegisterAction');

//Admin
$app->get('/admin/home', 'AdminAction:indexAction');