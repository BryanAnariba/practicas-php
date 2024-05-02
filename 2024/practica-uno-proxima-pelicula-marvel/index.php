<?php
  require_once('./config/functions-config.php');
  require_once('./config/constants.php');
  require_once('./classes/NextMovie.php');

  $nextMovie = NextMovie::fetch_and_create_movie(API_URL);
  $nextMovieData = $nextMovie->getData();
?>

<!DOCTYPE html>
<html lang="en">
  <?php
    renderTemplate('head', $nextMovieData);
  ?>
  <body>
    <?php
      renderTemplate('main', array_merge($nextMovieData));
    ?>
  </body>
</html>