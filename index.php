<?php
  include_once('./helpers/url.php');
  include_once('./helpers/config.php');

  isset($_GET['view']) ? $view = $_GET['view'] : $view = 'welcome';

?>

<?php include('./views/layout.view.php'); ?>
