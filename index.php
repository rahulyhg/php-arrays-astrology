<?php
  $company = 'iZodiac';
  $title = 'iZodiac';
  $topic = 'Astrology';
  $franchise = 'Zodiac Signs';

  // Let's create a simple array
  $movies = array(
    'Aquarias',
    'Pisces',
    'Aries',
    'Taurus',
    'Gemini',
    'Cancer',
    'Leo',
    'Virgo',
    'Libra',
    'Scorpio',
    'Sagittarius',
    'Capricorn'
  );

  // Let's create an associative array
  $movieYears = array(
    'Aquarias' => January,
    'Pisces' => February,
    'Aries' => March,
    'Taurus' => April,
    'Gemini' => May,
    'Cancer' => June,
    'Leo' => July,
    'Virgo' => August,
    'Libra' => September,
    'Scorpio' => October,
    'Sagittarius' => November,
    'Capricorn'=> December
  );

  // Count how many items are stored in the array $movies
  $moviesLength = count($movies);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <main class="container py-4">
      <h1><?php echo $topic; ?>: <em><?php echo $franchise; ?></em></h1>
      <p>There are <?php echo $moviesLength; ?> zodiac signs in <em><?php echo $topic; ?></em>.</p>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($movies as $movie) {
              echo '<li class="list-group-item">'.$movie.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($movie);
        ?>
      </ul>
      <p>Your sign is according to the month your were born, for example, someone born in june is a <em><?php echo $movies[4]; ?></em>.</p>
      <hr>
      <h2 class="h5 mb-4">The <em><?php echo $franchise; ?></em> represent the following months:</h2>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($movieYears as $movie => $year) {
              echo '<li class="list-group-item justify-content-between"><em>'.$movie.'</em> '.$year.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($movie);
        ?>
      </ul>
    </main>
    <footer class="container">
      <hr>
      <?php echo '<p>Copyright &copy; '.date('Y').' '.$company.'. All rights reserved.</p>'; ?> 
  </body>
</html>