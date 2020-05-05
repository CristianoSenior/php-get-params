<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <!-- passare come argomenti in GET nome e cognome;
      salutare l'interlocutore -->

<?php
$name = $_GET['nomeinterl'];
$cognome =$_GET['cognointerl'];

 ?>
<h1>Ciao<?php echo " ". $name." ". $cognome ?></h1>


  </body>
</html>
