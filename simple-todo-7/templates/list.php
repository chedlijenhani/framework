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
      <a href="/show/<?= $todo['tid'] ?>">
        <?php
        $is_done = $todo['complete'];
        if($is_done) {
          print('<del>');
        }
        print($todo['todo']);
        if($is_done) {
          print('</del>');
        }
        ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</body>
</html>
