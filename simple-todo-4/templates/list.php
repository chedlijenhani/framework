<!-- template/list.php -->
<!DOCTYPE html>
<html>
<head>
  <title>List of todos</title>
</head>
<body>
  <h1>List of todos</h1>
  <ul>
    <?php foreach ($todos as $todo): ?>
    <li>
      <a href="http://127.0.0.1:8080/show.php?id=<?php echo $todo['tid'] ?>">  Todo id <?= $todo['tid'] ?>:<?= $todo['todo'] ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</body>
</html>
