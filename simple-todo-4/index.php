<?php

// index.php
require_once 'todomodel.php';

$todos = get_all_todos();

require 'templates/list.php';
