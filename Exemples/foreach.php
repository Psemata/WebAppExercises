<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Voici les chiffres de 1 à 10</p>
    <?php
      foreach(range(1, 10) as $number){
          echo $number . " ";
      }
    ?>

  </body>
</html>
