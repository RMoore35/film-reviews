<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <?php
    $page = $_SERVER['PHP_SELF'];
    switch ($page){
    case 'index.php':
      $title= 'Moore Films';
      break;

    case 'about.php':
      $title= 'About | Moore Films';
      break;

    case 'lists.php':
      $title= 'Lists | Moore Films';
      break;

      case 'reviews.php':
        $title= 'Reviews | Moore Films';
        break;
  }
   ?>
  <title><?php echo $title; ?></title>
</head>
<body>
<div class="header">
  <h1>Moore Films</h1>
  <p>A place for reviews and all other things film</p>
</div>
<div class="navbar">
  <button name="button"><a href="/index.html">Home</a></button>
  <button name="button"><a href="/reviews.html">Reviews</a></button>
  <button name="button"><a href="/lists.html">Lists</a></button>
  <button name="button"><a href="https://letterboxd.com/RMoore35/watchlist/" target="_blank">Watchlist</a></button>
  <button name="button"><a href="/about.html">About</a></button>
  <button name="button"><a href="https://github.com/RMoore35/film-reviews" target="_blank">Github</a></button>
</div>
