<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- passare come argomento in GET una mail
    -stampare un div che contenga OK se contiene un punto e una chiocciola; KO altrimenti -->

    <?php
    $mail = $_GET['youremail'];


     $mailPunto = strpos($mail,'.');
     $mailChiocc = strpos($mail,'@');
     ?>
     <div class="">
       <?php
        if($mailPunto
          &&$mailChiocc){
         echo "ok";
       }else{
         echo "ko";
       }



         ?>


     </div>
  </body>
</html>
