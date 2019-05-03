<?php

// todomodel.php

function open_database_connection()
{
    $link = new PDO('sqlite:' . __DIR__ . '/todo.sqlite');

    return $link;
}

function close_database_connection(&$link)
{
    $link = null;
}

function get_all_todos()
{
    $link = open_database_connection();

    $result = $link->query('SELECT * from todos ORDER BY created');
    //print_r($result);

    $todos = array();
    while ($row = $result->fetch()) {
      //print_r($row);
      $todo = array(
        'todo' => $row['todo'],
        'created' => date_create_from_format('Y-m-d H:i:s', $row['created']),
        'updated' => date_create_from_format('Y-m-d H:i:s', $row['updated']),
        'complete' => (bool) $row['is_complete']
      );
      //print_r($todo);
      $todos[] = $todo;
    }

    close_database_connection($link);

    return $todos;
}
