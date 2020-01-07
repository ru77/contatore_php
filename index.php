<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>contatore php</title>
  </head>
  <body>

<?php

session_start();

if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;

echo"views = ".$_SESSION['views'];

?>

  </body>
</html>
