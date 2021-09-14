<?php include 'header.php' ?>
<div class="row">
  <div class="main">
    <h1>The place for all things film</h1>
  </div>
  <div class="side">
    <img src="/images/stockphoto6.png" >
  </div>
</div>
<div class="main-3">
  <h1>Latest Reviews</h1>
  <p><?php $lines = file('top3.txt'); foreach($lines as $line){echo $line;}?></p><br>
  <p>*****The rest of my reviews can be found on my
    <a href="https://letterboxd.com/RMoore35/" target="_blank">Letterboxd profile.</a>*****</p>
</div>
<div class="main-4">
  <h2><b>Top Four Films</b></h2>
  <h3><a href="https://www.themoviedb.org/movie/9361-the-last-of-the-mohicans" target="_blank">The Last of the Mohicans</a></h3>
  <h3><a href="https://www.themoviedb.org/movie/7270-matchstick-men" target="_blank">Matchstick Men</a></h3>
  <h3><a href="https://www.themoviedb.org/movie/97367-the-place-beyond-the-pines" target="_blank">The Place Beyond the Pines</a></h3>
  <h3><a href="https://www.themoviedb.org/movie/642-butch-cassidy-and-the-sundance-kid" target="_blank">Butch Cassidy and the Sundance Kid</a></h3>
</div>
<?php include 'footer.html' ?>
