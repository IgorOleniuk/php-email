<?php
//mail('ivanigorolenyk@gmail.com', 'subject', 'Line1 \n Line2 \n Line3');

$to = 'ivanigorolenyk@gmail.com';
$subject = 'Заголовок письма';
$message = '<p>Текст письма</p>';
$headers = 'From: ivanigorolenyk@gmail.com';

mail($to, $subject, $message, $headers);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
