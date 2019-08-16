<?php
//mail('ivanigorolenyk@gmail.com', 'subject', 'Line1 \n Line2 \n Line3');

$to = 'igor@igoroleniul.com.ua';
$subject = 'Заголовок письма';
$message = '<p>Текст письма</p>';
$headers = 'From: igor@igoroleniul.com.ua';

mail($to, $subject, $message, $headers);
?>
