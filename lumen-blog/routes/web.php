<?php


$router->get('/', function () use ($router) {
    return $router->app->version() . ' - ' . env('APP_NAME');
});


$router->get('profile', [
    'as' => 'profile', 'uses' => 'ProfileController@index'
]);