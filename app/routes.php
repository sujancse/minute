<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
