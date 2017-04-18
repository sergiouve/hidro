<?php

$base_url = '/?view=';
$routes = array();

$views_path = __DIR__ . '/../views/pages/';
$viewsList = array_diff(scandir($views_path), array('.', '..'));

foreach ($viewsList as $view_file) {
  $view_file = str_replace('.view.php', '', $view_file);
  $routes[$view_file] = $base_url . $view_file;
}
