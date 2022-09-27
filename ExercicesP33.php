<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function get_config() {
        return require "config.php";
      }

      // 1)
      // Si $abo est un tableau, une fonction in_array existe et permet de retourner un booléen comme réponse
      // Si $abo est une string, la fonction strpos() retourne un index si une valeur est dans la variable, il retourne -1 sinon
      // --> Création d'un tableau comportant les éléments voulus --> in_array --> comparaison valeur dans get et du tableau
      echo $_GET["abo"];
      if(strpos($_GET["abo"], "general") === false){
        echo "La variable abo ne contient pas la valeur general<br>";
      } else {
        echo "La variable abo contient la valeur general<br>";
      }
      // 2)
      foreach ($_GET as $key => $value) {
          echo $key . " : " . $value . "<br>";
      }
      // 3)
      $chaine = "ceci est un test";
      $tab = explode(" ", $chaine);

      foreach($tab as $value){
        echo $value . "<br>";
      }
      // 4)
      $tab2 = array_map("strtoupper", $tab);

      foreach($tab2 as $value){
        echo $value . "<br>";
      }
      // 5)
      for ($i=0; $i < count($tab2); $i++) {
        if($i != (count($tab2) - 1)){
            echo $tab2[$i] . ", ";
        } else {
            echo $tab2[$i];
        }
      }
      // 6)

    ?>
  </body>
</html>
