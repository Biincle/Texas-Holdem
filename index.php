<?php
  include "gracz.class.php";
  include "krupier.class.php";

  $gracz = new gracz;
  $krupier = new krupier;

  //Losowanie karty dla kazdego z graczy
  $krupier->rozdaj(2);
  echo $gracz->rekaGracza;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Texas Holdem</title>
  </head>
  <body>




  </body>
</html>
