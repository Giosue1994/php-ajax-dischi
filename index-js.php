<?php
  include __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
    <title>PHP AJAX DISKS: codice con js</title>
  </head>
  <body>

    <!-- HEADER -->
    <header>
      <div class="container">
        <div class="logo">
          <img src="img/logo.png" alt="Spotify">
        </div>
        <div class="select-author">
          <label>Seleziona un autore</label>
          <select class="author">
            <option>--</option>

          </select>
        </div>
      </div>
    </header>

    <!-- MAIN -->
    <main>
      <div class="container">

      </div>
    </main>

    <?php include __DIR__ . '/partials-php/template/template-author.php'; ?>
    <?php include __DIR__ . '/partials-php/template/template-disk.php'; ?>

    <script src="dist/app.js">

    </script>
  </body>
</html>
