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
    <title>PHP AJAX DISKS</title>
  </head>
  <body>

    <!-- HEADER -->
    <header>
      <div class="container">
        <div class="logo">
          <a href="/php-ajax-dischi"><img src="img/logo.png" alt="Spotify"></a>
        </div>

        <div class="select-author">
          <form action="/php-ajax-dischi" method="get">
            <select name="author-select" class="author">

              <option value="Tutti gli autori">Tutti gli autori</option>
              <?php foreach ($database as $disk) { ?>
                <option value="<?php echo $disk['author']; ?>"><?php echo $disk['author']; ?></option>
              <?php } ?>

            </select>
            <input type="submit" value="Filtra" >

          </form>
        </div>

      </div>
    </header>

    <!-- MAIN -->
    <main>
      <div class="container">

        <?php if (isset($author) === false) { ?>
          <?php include __DIR__ . '/partials-php/filter.php'; ?>
        <?php }; ?>

        <?php if (empty($author) || $author === 'Tutti gli autori') { ?>
          <?php foreach ($database as $disk) { ?>

            <!-- DISK -->
            <div class="card">

              <img src="<?php echo $disk['poster']; ?>" alt="Poster">
              <h3><?php echo $disk['title'] ?></h3>
              <span><?php echo $disk['author'] ?></span>
              <span><?php echo $disk['year'] ?></span>

            </div>
          <?php } ?>
        <?php } ?>


      </div>
    </main>

  </body>
</html>
