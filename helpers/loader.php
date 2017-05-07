<?php

$base_url = '/?view=';
$components_base_path = str_replace('helpers' , '', __DIR__);
$routes = array();
$components = array();

$views_path = __DIR__ . '/../views/pages/';
$viewsList = array_diff(scandir($views_path), array('.', '..', '.gitkeep'));
$components_path = __DIR__ . '/../views/components/';
$componentsList = array_diff(scandir($components_path), array('.', '..', '.gitkeep'));

foreach ($viewsList as $view_file) {
  $view_file = str_replace('.view.php', '', $view_file);
  $routes[$view_file] = $base_url . $view_file;
}

foreach ($componentsList as $component_file) {
  $component_name = str_replace('.view.php', '', $component_file);
  $components[$component_name] = $components_base_path . 'views/components/' . $component_file;
}
