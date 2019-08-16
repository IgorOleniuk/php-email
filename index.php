<?php

$to = 'ivanigorolenyk@gmail.com';
$subject = 'Заголовок письма';
$message = 'Текст письма. Самое простое сообщение.';

$headers = 'Content-type: text-plain; charset= utf-8\r\n';

mail($to, $subject, $message, $headers);
?>
