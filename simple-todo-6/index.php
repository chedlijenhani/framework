<?php


#require_once __DIR__.'/vendor/autoload.php';
$vendor_directory = getenv('COMPOSER_VENDOR_DIR');
if ($vendor_directory === false) {
  $vendor_directory = __DIR__ . '/vendor';
}
require_once $vendor_directory . '/autoload.php';

use Symfony\Component\HttpFoundation\Request;

// index.php
require_once 'todomodel.php';

function list_action()
{
  $todos = get_all_todos();

  require 'templates/list.php';
}

function show_action($id)
{
  $todo = get_todo_by_id($id);

  require 'templates/show.php';
}

$request = Request::createFromGlobals();

$uri = $request->getPathInfo();
if ('/' === $uri) {
   list_action();
} elseif ('/show' === $uri && $request->query->has('id')) {
    show_action($request->query->get('id'));
} else {
  header('HTTP/1.1 404 Not Found');
  //print_r($request->query);
  echo '<html><body><h1>Page Not Found</h1></body></html>';
}
