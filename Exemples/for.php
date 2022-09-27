<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $n = rand(1,12);
    ?>
      <p>Voici les multiples de 1 à <?php echo $n; ?> </p>
    <?php
      for($i = 1; $i <= $n ; $i++){
        for($j = 1; $j <= 12 ; $j++){
            echo "$j * $i = " . $j * $i . ";\t";
        }
        echo "<br>";
      }
    ?>
  </body>
</html>
