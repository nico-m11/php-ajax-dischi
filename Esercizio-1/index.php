<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio 1</title>
    <link rel="stylesheet" href="style/style.css">
  </head>
  <body>
    <div class="container">

        <?php
        include 'database.php';
        foreach ($call['response'] as $key) {
          echo '<h2>' . $key['title'] . '</h2>';
          echo '<h5>' . $key['author'] . '</h5>';
          echo '<h5>' . $key['genre'] . '</h5>';
          echo '<h5>' . $key['year'] . '</h5>';
          echo "<img src='" . $key['poster'] . "'>" . '<br>';
        }
        ?>

    </div>
  </body>
</html>
