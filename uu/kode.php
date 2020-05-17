<?php

$captcha_image = imagecreatefrompng("../vendor/kode/cap2.png");
$captcha_font = imageloadfont("../vendor/kode/fonts/font.gdf");
$captcha_text = substr(md5(uniqid('')),0,4);

$_SESSION['kode'] = $captcha_text;

$captcha_color = imagecolorallocate($captcha_image,167,0,0);
imagestring($captcha_image,$captcha_font,20,0,$captcha_text,$captcha_color);
imagepng($captcha_image);
imagedestroy($captcha_image);
?>
