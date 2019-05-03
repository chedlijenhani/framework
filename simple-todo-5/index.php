<?php

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

// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ('/index.php' === $uri || '/' === $uri) {
    list_action();
} elseif (('/index.php/show' === $uri || '/show' === $uri) && isset($_GET['id'])) {
    show_action($_GET['id']);
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}
