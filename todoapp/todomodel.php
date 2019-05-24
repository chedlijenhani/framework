<?php
// todomodel.php

/**
 * Gestion du "modèle de données" de l'application
 *
 * Implémente une fausse base de données, en lecture seule, 
 * grâce à des tableaux en mémoire
 */

// Définition de données d'exemple

$test_task = array(
  'tid' => 4,
  'todo' => 'devenir un pro du Web',
  'complete' => 0,
  'created' => date_create_from_format('Y-m-d H:i:s', '2017-01-01 11:27:21'),
  'updated' => date_create_from_format('Y-m-d H:i:s', '2017-01-01 11:27:21'),
);
$another_test_task = array(
  'tid' => 2,
  'todo' => 'monter une startup',
  'complete' => 0,
  'created' => date_create_from_format('Y-m-d H:i:s', '2017-01-02 11:27:21'),
  'updated' => date_create_from_format('Y-m-d H:i:s', '2017-01-03 11:27:21'),
);
$third_task = array(
  'tid' => 3,
  'todo' => 'devenir maître du monde',
  'complete' => 0,
  'created' => date_create_from_format('Y-m-d H:i:s', '2017-01-03 11:27:21'),
  'updated' => date_create_from_format('Y-m-d H:i:s', '2017-01-03 11:27:21'),
);
$fourth_task = array(
  'tid' => 1,
  'todo' => 'terminer le hp 2-3',
  'complete' => 1,
  'created' => date_create_from_format('Y-m-d H:i:s', '2016-12-31 00:00:00'),
  'updated' => date_create_from_format('Y-m-d H:i:s', '2017-05-29 11:27:21'),
);

$list_of_tasks = array($test_task, $another_test_task, $third_task, $fourth_task);

/**
 * Renvoie toutes les todos
 *
 * @return array
 */
 function get_all_todos()
{
    global $list_of_tasks;

    return $list_of_tasks;
}

/**
 * Récupère une todo d'identifiant donné
 *
 * @param int $id
 * @return NULL|array
 */
function get_todo_by_id($id)
{
    global $list_of_tasks;

    $found = null;

    foreach ($list_of_tasks as $todo) {
      if ($todo['tid'] == $id) {
        $found = $todo;
        break;
      }
    }
    return $found;
}
