<?php

$to = 'igor@igoroleniul.com.ua';
$subject = 'Заголовок письма';
$message = 'Текст письма. Самое простое сообщение.';
$from = 'ivanigorolenyk@gmail.com';
$headers = 'From: $from\r\nReplay-to: %from\r\nContent-type: text-plain; charset= utf-8\r\n';

mail($to, $subject, $message, $headers);
?>
