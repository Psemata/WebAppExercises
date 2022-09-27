<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // 1)
      $chaine = "24 toto";
      $chaine = $chaine + 8 . "<br>";
      echo $chaine;
      // 2)
      $chaine = "24 toto";
      if ($chaine == 24) {
        echo "true<br>";
      } else {
        echo "false<br>";
      }
      if($chaine === 24){
        echo "true<br>";
      } else {
        echo "false<br>";
      }
      // 3)
      $var = $chaine . "\"'" . "<br>";
      echo $var;
      $var = $chaine . '"\'' . "<br>";
      echo $var;
      // 4)
      // 1
      $chaine1 = "première ligne
      deuxième ligne
      troisième ligne";
      echo $chaine1 . "<br>";
      // 2)
      // L'indentation est importante
      $chaine2 = <<<MLINE première ligne
deuxième ligne
troisième ligne
MLINE;
      // 5)
      // Exécute le contenu des ces backticks comme une commande shell (appel système)
      $a = `date`;
      echo $a . "<br>";
      // 6)
      $time = Date("i");
      echo $time;
      if(!($time % 2)){
        echo "OUI";
      } else {
        echo "NON";
      }
      echo "<br>";
      // 7)
      $reverse = "Bonsoir";
      echo strrev($reverse);
      echo "<br>";
      // 8)
      $bonus = "Sanglant";
      for($i = 0; $i < strlen($bonus) ;$i++){
        echo $bonus[$i] . "<br>";
      }
    ?>
  </body>
</html>
