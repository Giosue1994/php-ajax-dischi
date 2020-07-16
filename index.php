<?php
  include __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
    <title>PHP AJAX DISKS</title>
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

        <?php foreach ($database as $disk) { ?>
          <!-- DISKS -->
          <div class="card">

            <img src="<?php echo $disk['poster']; ?>" alt="Poster">
            <h3><?php echo $disk['title'] ?></h3>
            <span><?php echo $disk['author'] ?></span>
            <span><?php echo $disk['year'] ?></span>

          </div>
        <?php } ?>

      </div>
    </main>

  </body>
</html>
