<?php

$to = 'ivanigorolenyk@gmail.com';
$subject = 'Заголовок письма';
$message = 'Текст письма. Самое простое сообщение.';
$headers = 'Content-type: text-plain; charset=UTF-8';

mail($to, $subject, $message, $headers);
?>
