<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hidro</title>
  <!-- TODO: Add to main css ? -->
  <!-- <link rel="stylesheet" type="text/css" href="assets/vendors/materialize.css" /> -->
  <link rel="stylesheet" type="text/css" href="assets/styles/main.css" />
</head>
  <body>

    <?php if (!in_array($view, $headerslessViews)): ?>
      <?php include('./views/layouts/header.view.php'); ?>
    <?php endif; ?>

    <main>
      <div class="page">
        <div class="main container-fluid">

          <?php include('./views/pages/' . $view . '.view.php'); ?>

        </div>
      </div>
    </main>

    <?php include('./views/layouts/footer.view.php'); ?>

    <script src="assets/vendors/jquery.min.js" type="text/javascript"></script>
    <script src="assets/scripts/prototype.js" type="text/javascript"></script>

  </body>
</html>