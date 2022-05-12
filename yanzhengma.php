<?php
ob_clean();
session_start();
		header("Content-Type:image/gif");

		$image =imagecreatetruecolor(100,30);
		imagegif($image);
		imagedestroy($image);
		/*$bgcolor = imagecolorallocate($image,255,0,0);*/
		imagefill($image,0,0,$bgcolor);
		$captcha_code = "";
		
	for($i=0;$i<4;$i++){
		$fontsize=6;
		$fontcolor = imagecolorallocate($image,255,255,255);
		$fontcontent = rand(0,9);
//		$captcha_code.=$fontcontent;
/*		$x = ($i*100/4)+rand(5,10);
		$y = rand(5,10);*/
		imagestring($image,$fontsize,$x,$y,$fontcontent,$fontcolor);
		$_SESSION['autocode']=  $captcha_code;
		}
	for($i=0;$i<4;$i++) {
		$linecolor = imagecolorallocate($image,rand(80,220),rand(80,220),rand(80,220));
		imageline($image,rand(1,29),rand(1,99),rand(1,29),$linecolor);
		
		}
		
		
?>