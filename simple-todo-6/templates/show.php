<!-- template/show.php -->
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
  <title>Details for todo <?= $id ?></title>
</head>
<body>
  <h1><?= $todo['todo'] ?></h1>

  <p>To do: <?= $todo['todo'] ?></p>
  <p>Status: <?php
    if($todo['complete']) {
      print('DONE');
    }
    else {
      print('NOT YET FINISHED');
    }  ?>
  <p>Created: <?php
    print(datefmt_format($fmt, $todo['created']));
     ?></p>
  <p>Last modified: <?php
    print(datefmt_format($fmt, $todo['updated']));
     ?></p>

</body>
</html>
