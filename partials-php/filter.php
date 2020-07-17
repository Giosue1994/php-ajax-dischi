<?php
  $author = $_GET['author-select'];
?>

 <?php foreach ($database as $disk) { ?>
   <?php if ($author === $disk['author']){ ?>

     <!-- DISK -->
     <div class="card">

       <img src="<?php echo $disk['poster']; ?>" alt="Poster">
       <h3><?php echo $disk['title'] ?></h3>
       <span><?php echo $disk['author'] ?></span>
       <span><?php echo $disk['year'] ?></span>

     </div>
   <?php } ?>
 <?php } ?>
