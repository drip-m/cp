<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('products', 'ProductsController@index');
    $router->get('products/create', 'ProductsController@create');
    $router->post('products', 'ProductsController@store');
    $router->get('products/{id}/edit', 'ProductsController@edit');
    $router->put('products/{id}', 'ProductsController@update');
    $router->get('class', 'ProductClassesController@index');
    $router->get('class/create', 'ProductClassesController@create');
    $router->post('class', 'ProductClassesController@store');
    $router->get('class/{id}/edit', 'ProductClassesController@edit');
    $router->put('class/{id}', 'ProductClassesController@update');

    $router->get('solution_class', 'SolutionClassesController@index');
    $router->get('solution_class/create', 'SolutionClassesController@create');
    $router->post('solution_class', 'SolutionClassesController@store');
    $router->get('solution_class/{id}/edit', 'SolutionClassesController@edit');
    $router->put('solution_class/{id}', 'SolutionClassesController@update');

    $router->get('solution', 'SolutionsController@index');
    $router->get('solution/create', 'SolutionsController@create');
    $router->post('solution', 'SolutionsController@store');
    $router->get('solution/{id}/edit', 'SolutionsController@edit');
    $router->put('solution/{id}', 'SolutionsController@update');
});
