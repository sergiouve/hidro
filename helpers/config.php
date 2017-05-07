<?php

$development = true;

if ($development) {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
}

$config = [
  'project_name' => 'Hidro',
  'repository' => 'https://github.com/sergiouve/hidro',
  'author' => 'Sergio Uve',

  'views' => [
    'no_header' => []
  ]
];
