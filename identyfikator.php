<?php

$image = imagecreatefrompng("img/wzor_nowy.png");
$font = 'c:\Windows\Fonts\tahomabd.TTF';
$black = imagecolorallocate($image, 0, 0, 0);

$linia1 = array();
$i=1;
$offset1 = 142;
$offset2 = 142;
$offset3 = 142;
$offset4 = 142;
$offset5 = 142;

foreach($_POST as $znak)
{
	
	if($i>=1 && $i<=15)
	{
		imagettftext($image, 13, 0, $offset1, 52, $black, $font, strtoupper($znak));
		$offset1 = $offset1 +19.95;
		
	}
	if($i>=16 && $i<=31)
	{
		imagettftext($image, 13, 0, $offset2, 92, $black, $font, strtoupper($znak));
		$offset2 = $offset2 +19.95;
		
	}
	if($i>=32 && $i<=47)
	{
		imagettftext($image, 13, 0, $offset3, 132, $black, $font, strtoupper($znak));
		$offset3 = $offset3 +19.95;
		
	}
	if($i>=48 && $i<=63)
	{
		imagettftext($image, 13, 0, $offset4, 172, $black, $font, strtoupper($znak));
		$offset4 = $offset4 +19.95;
		
	}
	if($i>=64 && $i<=78)
	{
		imagettftext($image, 13, 0, $offset5, 217, $black, $font, strtoupper($znak));
		$offset5 = $offset5 +19.95;
		
	}

	$i++;
}
header("Content-type: image/png");
imagepng($image);


?>