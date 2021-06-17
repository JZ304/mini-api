<?php
/**
 * Created by :
 * User zjx
 * Date 2021/6/17
 * Time 上午 10:07
 */

/** @var \Laravel\Lumen\Routing\Router $router */

use \Illuminate\Support\Facades\Route;

$router->group(['namespace' => 'Auth'],function () use ($router) {
    $router->post('test', ['as' => 'test', 'uses' => 'AuthController@auth']);
});


