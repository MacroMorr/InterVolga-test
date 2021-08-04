<?php
require_once __DIR__ . '/thumbs.php';

$image = new Thumbs(__DIR__ . '/test.jpg');
$image->thumb(200, 100);
$image->output();

echo $image;

//  Пропорции при изменении размера сохраняются
