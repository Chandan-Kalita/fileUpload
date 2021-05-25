<?php
// start the session session 
session_start();

// Creating text for captcha
$all_str = 'qwertyuioplkjhgfdsazxcvbnmZXCVBNMLKJHGFDSAQWERTYUIOP1234567890';
$sf_str = str_shuffle($all_str);
$rnd_code = substr($sf_str,0,6);
$_SESSION['CODE'] = $rnd_code;

// creating imagelayer 
$layer = imagecreatetruecolor(70,30);
$bg = imagecolorallocate($layer,255,0,0);
imagefill($layer,0,0,$bg);
$text_color = imagecolorallocate($layer,255,230,200);
imagestring($layer,20,5,5,$rnd_code,$text_color);

// combine background with text
header('Content-Type:image/jpeg');
imagejpeg($layer);


?>