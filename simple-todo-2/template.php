<!-- template.php -->
<!DOCTYPE html>
<html>
<head>
  <title>List of todos</title>
</head>
<body>
  <h1>List of todos</h1>
  <ul>
    <?php foreach ($todos as $todo  ): ?>
    <li>
        <?php
           if ($todo['is_complete']==1)
        echo '<del>'.$todo['todo'].'<del>';
            else
        echo $todo['todo']  ;
       ?>
    </li>

    <?php endforeach ?>
  </ul>
</body>
</html>
