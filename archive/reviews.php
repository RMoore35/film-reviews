<?php include 'header.html' ?>
  <div class="main">
      <h2><b>Most Recent Reviews</b></h2>
      <?php $lines = file('../top3.txt'); foreach($lines as $line){echo $line;}?><br>
  </div>
  <div class="main-2">
    <h3>All Reviews</h3>
    <p>The rest of my reviews can be found on my
      <a href="https://letterboxd.com/RMoore35/" target="_blank">Letterboxd profile.</a></p><br>
  </div>
<?php include 'footer.html' ?>
