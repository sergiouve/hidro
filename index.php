<?php
  include_once('./helpers/loader.php');
  include_once('./helpers/config.php');

  isset($_GET['view']) ? $view = $_GET['view'] : $view = 'welcome';

?>

<?php include('./views/layout.view.php'); ?>
