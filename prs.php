<?php
//Инициализируем cURL-сессию
$ch = curl_init ("https://www.lme.com/");
 
//открываем для записи файл yandex.txt
//сюда внесём исходный html-код
$fp = fopen ("text.txt", "w");
 
//указываем куда копировать содержимое
curl_setopt ($ch, CURLOPT_FILE, $fp);
 
//Заголовок - не выводим
curl_setopt ($ch, CURLOPT_HEADER, 0);
 
//Поехали!
curl_exec ($ch);
 
//Закрываем cURL-сессию
curl_close ($ch);
 
//Закрываем дексриптор файла
fclose ($fp);
 
//И вставляем на страницу полученный код
include 'text.txt';
?> 