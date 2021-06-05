<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
    $myfile="demo.php";
     $read= fopen($myfile,"r");
     if($read){
         $rk= filesize($myfile);
         echo $rk;
         $sam=  fread($read,$rk);
         echo "<pre>$sam</pre>";
     }
       ?>
    </body>
</html>
