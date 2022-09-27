<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exemple de switch</title>
  </head>
  <body>
    <p>Voici un exemple de switch en PHP</p>
    <?php
        $a = "valeur 2";
        switch($a){
          case "valeur":
            $b = 1;
            break;
          case "valeur 2":
            $b = 2;
            break;
          default:
            $b = 3;
        }
        echo $b;
    ?>

  </body>
</html>
