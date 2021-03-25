<?php include 'header.php' ?>
<div class="row">
  <div class="main">
    <h1>The place for all things film</h1>
  </div>
  <div class="side">
    <img src="/images/stockphoto6.png" >
  </div>
</div>
<div class="main-2">
  <b><h1>Welcome to my site!</h1></b>
    <p>Here you will find my favorite films, favorite actors/actresses,
      as well as a little about myself.</p>
    <p>You can find all of the films I want to watch over on my
      <a href="https://letterboxd.com/RMoore35/watchlist/" target="_blank">Letterboxd profile.
      </a></p><br><br>
  <h1>Some Thoughts</h1>
    <p>I love watching movies. Ever since I was young, I remember fondly getting lost in an hour or
      two of a story. I love the creativity, the diversity of thought, and the almost endless possibilities.</p>
    <p>I'm not very picky. I'll watch almost anything. There have only been a few films that I haven't
      been able to finish, for various reasons. I hope you find a little bit of joy,
      heartache, and at the very least, an escape from the present.</p>
</div>
<div class="main-3">
  <h1>Latest Reviews</h1>
  <p><?php $lines = file('top3.txt'); foreach($lines as $line){echo $line;}?></p><br>
  <p>*****The rest of my reviews can be found on my
    <a href="https://letterboxd.com/RMoore35/" target="_blank">Letterboxd profile.</a>*****</p>
</div>
<div class="main-4">
  <h3><b>Top Four Films</b></h3>
  <h4><a href="https://www.themoviedb.org/movie/9361-the-last-of-the-mohicans" target="_blank">The Last of the Mohicans</a></h4>
  <br><br>
  <a href="https://www.themoviedb.org/movie/7270-matchstick-men" target="_blank">Matchstick Men</a>
  <br><br>
  <a href="https://www.themoviedb.org/movie/97367-the-place-beyond-the-pines" target="_blank">The Place Beyond the Pines</a>
  <br><br>
  <a href="https://www.themoviedb.org/movie/642-butch-cassidy-and-the-sundance-kid" target="_blank">Butch Cassidy and the Sundance Kid</a>
</div>
<?php include 'footer.html' ?>
