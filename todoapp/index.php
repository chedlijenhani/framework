<?php

/**
 * index.php
 */

// require_once __DIR__.'/vendor/autoload.php';
$vendor_directory = getenv ( 'COMPOSER_VENDOR_DIR' );
if ($vendor_directory === false) {
	$vendor_directory = __DIR__ . '/vendor';
}
require_once $vendor_directory . '/autoload.php';

$app = new Silex\Application ();
$app ['debug'] = true;

require_once 'todomodel.php';

// Cablage de Twig avec Silex
$app->register ( new Silex\Provider\TwigServiceProvider (), array (
		'twig.path' => __DIR__ . '/templates',
		'twig.options' => array (
				'debug' => true 
		) 
) );

$app->register( new Silex\Provider\AssetServiceProvider(),
		array(
				'assets.version' => 'v1',
				'assets.version_format' => '%s?version=%s',
				'assets.named_packages' => array(
						'css' => array('base_path' => '/css'),
						'js' => array('base_path' => '/js')
				)
		)
		);
$app ['twig']->addExtension ( new Twig_Extension_Debug () );


// Routes and handlers

// home_action
$app->get ( '/', function () use ($app) {
	$todoslist = get_all_todos ();
	// print_r($todoslist);
	
	return $app ['twig']->render ( 'listtodos.html.twig', [ 
			'todoslist' => $todoslist 
	] );
} )->bind ( 'home' );

// show_action
$app->get ( '/show/{id}', function ($id) use ($app) {
	$todo = get_todo_by_id ( $id );
	// print_r($todo);
	
	return $app ['twig']->render ( 'showtodo.html.twig', [ 
			'id' => $id,
			'todo' => $todo 
	] );
} )->bind ( 'show' );

$app->run ();
