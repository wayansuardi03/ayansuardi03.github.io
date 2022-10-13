<?php
session_start();
$rand_num = rand(11111, 99999);
$_SESSION['CODE'] = $rand_num;
$layer = imagecreatetruecolor(116, 36);
$captcha_bg = imagecolorallocate($layer, 131, 111, 133);
imagefill($layer, 0, 0, $captcha_bg);
$captcha_text_color = imagecolorallocate($layer, 0, 0, 0);
imagestring($layer, 225, 35, 10, $rand_num, $captcha_text_color);
header('Content-Type:image/jpeg');
imagejpeg($layer);