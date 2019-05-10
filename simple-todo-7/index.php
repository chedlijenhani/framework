<?php

// index.php

#require_once __DIR__.'/vendor/autoload.php';
$vendor_directory = getenv('COMPOSER_VENDOR_DIR');
if ($vendor_directory === false) {
  $vendor_directory = __DIR__ . '/vendor';
}
require_once $vendor_directory . '/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

require_once 'todomodel.php';

// list_action
$app->get('/', 
    function () {
        $todos = get_all_todos();

        require 'templates/list.php';
        return("");
    } );

// show_action
$app->get('/show/{id}', 
    function ($id) {
        $todo = get_todo_by_id($id);

        require 'templates/show.php';
        return("");
    } );

$app->run();
