<?php
// Routes

$app->get('/', 'HomeAction:indexAction');
$app->get('/login', 'HomeAction:loginAction');
$app->post('/login', 'HomeAction:doLoginAction');