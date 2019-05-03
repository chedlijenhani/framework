<?php

// index.php
require_once 'todomodel.php';

$id = $_GET['id'];

$todo = get_todo_by_id($id);

require 'templates/show.php';
