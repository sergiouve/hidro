<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hidro</title>
  <link rel="stylesheet" type="text/css" href="assets/styles/main.css" />
  <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
</head>
  <body>

    <?php if (!in_array($view, $config['views']['no_header'])): ?>
      <?php include('./views/layouts/header.view.php'); ?>
    <?php endif; ?>

    <main>
      <div class="page">
        <div class="main">

          <?php include('./views/pages/' . $view . '.view.php'); ?>

        </div>
      </div>
    </main>

    <?php include('./views/layouts/footer.view.php'); ?>

    <script src="node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>

  </body>
</html>
