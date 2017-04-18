<?php
  include_once('./helpers/url.php');
  $_GET['view'] ? $requested_view = $_GET['view'] : $requested_view = 'login';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LeagueHub</title>
  <link rel="stylesheet" type="text/css" href="assets/styles/main.css" />  
</head>
  <body>

    <?php include('./views/layouts/header.view.php'); ?>

    <div class="page">
      <div class="main">

        <?php include('./views/pages/' . $requested_view . '.view.php'); ?>

      </div>
    </div>

    <?php include('./views/layouts/footer.view.php'); ?>

  </body>
</html>
