<?php
// Установка Content-type
header('Content-type: image/png');

// Получение текущего размера изображения
list($width, $height) = getimagesize("image.png");

// Изменения рамера изображения
$new_width = 200;
$new_height = 100;
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefrompng("image.png");
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// Вывод изображения
imagepng($image_p, null, 9); //50% это качество 0-100%

?>