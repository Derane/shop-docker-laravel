<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_check' => [[], ['_controller' => 'App\\Controller\\CheckController::index'], [], [['text', '/check']], [], [], []],
    'default-controller' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], [], []],
    'app_hello' => [[], ['_controller' => 'App\\Controller\\HelloController::index'], [], [['text', '/hello']], [], [], []],
    'app_hello_controoler' => [[], ['_controller' => 'App\\Controller\\HelloControolerController::index'], [], [['text', '/hello/controoler']], [], [], []],
    'new123' => [[], ['_controller' => 'App\\Controller\\NewController::index'], [], [['text', '/new123']], [], [], []],
];
