<?php include 'header.php' ?>
  <div class="main">
    <h2><b>Favorite Actresses</b></h2>
    <h4>These are currently my favorite actresses. Obviously subject to change.</h4>
  </div>
  <div class="col-container">
    <div class="column-1">
      <?php $lines = file('actresses.txt'); echo $lines[0];?>
    </div>
    <div class="column-1">
      <?php $lines = file('actresses.txt'); echo $lines[1];?>
    </div>
    <div class="column-1">
      <?php $lines = file('actresses.txt'); echo $lines[2];?>
    </div>
    </div>
  <div class="main-2">
    <h2><b>Favorite Actors</b></h2>
    <h4>These are currently my favorite actors. Obviously subject to change.</h4>
  </div>
  <div class="col-container">
    <div class="column-2">
      <?php $lines = file('actors.txt'); echo $lines[0];?>
    </div>
    <div class="column-2">
      <?php $lines = file('actors.txt'); echo $lines[1];?>
    </div>
    <div class="column-2">
      <?php $lines = file('actors.txt'); echo $lines[2];?>
    </div>
    </div>
<?php include 'footer.html' ?>
