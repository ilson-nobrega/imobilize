<?php

$config = parse_ini_file(__DIR__.'/../../../database.ini', true);

define("dbFactoryData",
   [
    'host' => $config['database']['host'],
    'username' => $config['database']['user'],
    'password' => $config['database']['password'],
    'database' => $config['database']['database']
   ]
);

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
        'view' => [
            'template_path' => __DIR__ . '/../templates',
            'twig' => [
                'cache' => __DIR__ . '/../cache/twig',
                'debug' => true,
                'auto_reload' => true,
            ],
        ],
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
