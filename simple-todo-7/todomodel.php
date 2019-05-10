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

function row_to_array($row)
{
  $todo = array(
    'tid' => $row['tid'],
    'todo' => $row['todo'],
    'created' => date_create_from_format('Y-m-d H:i:s', $row['created']),
    'updated' => date_create_from_format('Y-m-d H:i:s', $row['updated']),
    'complete' => (bool) $row['is_complete']
  );
  return $todo;
}

function get_all_todos()
{
    $link = open_database_connection();

    $result = $link->query('SELECT * from todos');
    //print_r($result);

    $todos = array();
	if( $result !== FALSE) {
	    while ($row = $result->fetch()) {
	      $todos[] = row_to_array($row);
    	}
	}
    close_database_connection($link);

    return $todos;
}

function get_todo_by_id($id)
{
    $link = open_database_connection();

    $query = 'SELECT * FROM todos WHERE tid=:id';
    $statement = $link->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $row = $statement->fetch(PDO::FETCH_ASSOC);

    close_database_connection($link);

    $todo = row_to_array($row);

    return $todo;
}
