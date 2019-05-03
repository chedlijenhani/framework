<?php

date_default_timezone_set('Europe/Paris');
// --- La setlocale() fonctionnne pour strftime mais pas pour DateTime->format()
setlocale(LC_TIME, 'fr_FR.utf8','fra');// OK

// index.php
require_once 'todomodel.php';

$todos = get_all_todos();

require 'templatelist.php';
