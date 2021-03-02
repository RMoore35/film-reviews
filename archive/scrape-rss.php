<?php
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://letterboxd.com/rmoore35/rss/');
  curl_setopt($ch, CURLOPT_HEADER, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $data = curl_exec($ch);
  file_put_contents("text.xml", $data);
  curl_close($ch);
?>

<?php include 'most-recent.php';?>
