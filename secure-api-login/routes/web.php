<?php

//local::secure-api-login.sws

$router->get('/', function () use ($router) {
    return $router->app->version();
});

Route::group(['prefix' => 'sws-api-rest', 'middleware' => 'auth'], function($app) {

    $app->get('secure-login-get','ApiMainController@secureLogin_get');

});