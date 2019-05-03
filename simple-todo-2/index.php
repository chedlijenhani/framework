<?php

$link = new PDO('sqlite:' . __DIR__ . '/todo.sqlite');
//print_r($link);

define('TABLE', 'TODOS');

$result = $link->query('SELECT * from '. TABLE);
//print_r($result);

$todos = array();
while ($row = $result->fetch()) {
    $todos[] = $row['todo'];
}

$link = null;

// include the HTML presentation code
require 'template.php';

?>
