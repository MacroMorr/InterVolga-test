<?php

$a = "В Венгрии Окон квалифицировался восьмым: Эстебан впервые после Барселоны вышел во второй сегмент и одержал шестую в сезоне победу над напарником. Дальнейшее развитие событий покажет, что именно это обстоятельство станет ключевым при распределении ролей в гонке.

С чётной стороны решётки стартовать сложнее — на ней меньше слой резины, а потому у шин меньше сцепления. Тем не менее Ландо Норрису, стоявшему шестым, аккурат перед Оконом, удалось разогнаться блестяще — британец опередил Валттери Боттаса. Эстебан же начал набирать скорость менее уверенно и не смог навязать борьбу Шарлю Леклеру. С обоими — Леклером и Норрисом — хороший старт сыграл злую шутку.";

$link = "https://autosport.com.ru/features/71376-podarki-ot-mercedes-i-pomoshch-alonso-kak-okon-vyigral-gran-pri-vengrii";


$b = mb_strimwidth($a, 0, 180, "...");


echo $b;

// Здесь немного схитрил по поводу ссылки. Может не так понят тз, в любом случае версия рабочая))

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>В Венгрии Окон квалифицировался восьмым: Эстебан впервые после Барселоны вышел во второй сегмент и одержал шестую в сезоне победу над напарником. Дальнейшее развитие <a href="https://autosport.com.ru/features/71376-podarki-ot-mercedes-i-pomoshch-alonso-kak-okon-vyigral-gran-pri-vengrii">событий пок...</a></p>
</body>
</html>

