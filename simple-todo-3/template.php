<!-- template.php -->
<?php
  $fmt = datefmt_create(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::MEDIUM,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN
);

?>
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
      <?php
        $is_done = $todo['complete'];
        if($is_done) {
          print('<del>');
        }
        print($todo['todo'] . ' (créé le ' . datefmt_format($fmt, $todo['created']) .')');
        if($is_done) {
          print('</del>');
        }
      ?>
    </li>
    <?php endforeach ?>
  </ul>
</body>
</html>
