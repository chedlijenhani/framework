<?php

$link = new PDO('sqlite:' . __DIR__ . '/todo.sqlite');
//print_r($link);

define('TABLE', 'todos');

$sqlquery = 'SELECT * from '. TABLE;
$result = $link->query($sqlquery);
//print_r($result);

?>
<!DOCTYPE html>
<html>
<head>
  <title>List of todos</title>
</head>
<body>
  <h1>List of todos</h1>
  <ul>
    <?php while ($row = $result->fetch()): ?>
    <li>
      <?php print( $row['todo'] ); ?>
    </li>
    <?php endwhile ?>
  </ul>
</body>
</html>

<?php
$link = null;
?>
