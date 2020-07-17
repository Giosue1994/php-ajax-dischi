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
        <img src="img/logo.png" alt="Spotify">
      </div>
    </header>

    <!-- MAIN -->
    <main>
      <div class="container">

      </div>
    </main>

    <!-- TEMPLATE -->
    <script id="disk-template" type="text/x-handlebars-template">
      <div class="card">
        <img src="{{{ poster }}}" alt="Poster">
        <h3>{{ title }}</h3>
        <span>{{ author }}</span>
        <span>{{ year }}</span>
      </div>
    </script>

    <script src="dist/app.js">

    </script>
  </body>
</html>
