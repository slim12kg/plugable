<?php

/**
 * Set theme to display for succeeding
 * routes
 */
$app['theme']->setTheme('frontend');

$app['route']->get(['as' => 'home','uses' => 'HomeController@index','url' => '/','filter' => 'csrf']);
$app['route']->get(['as' => 'home','uses' => 'BlogController@post','url' => 'blog/{slug}/{id}'])
->where(array('slug' => '[a-zA-Z0-9]+','id' => '[0-9]+'));
