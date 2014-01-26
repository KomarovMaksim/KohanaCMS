<?php
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 20.03.13
 * Time: 1:48
  */
class ImageFile{

	public static function autoformat($filename, $new_filename, $new_width, $new_height){
		$image = ImageFile::load($_SERVER['DOCUMENT_ROOT'].$filename);
		$width = imagesx($image['obj']);
		$height = imagesy($image['obj']);

		$ratio_x = $width / $new_width;
		$ratio_y = $height / $new_height;
		$nh = 0; $nw = 0; $ratio = 0;
		if ($ratio_x > $ratio_y){
			$nh = $new_height;
			$nw = $nh * $new_width / $new_height;
			$ratio = $ratio_y;
		} else {
			$nw = $new_width;
			$nh = $nw / $new_width * $new_height;
			$ratio = $ratio_x;
		}

		$new_image = array();
		$new_image['obj'] = imagecreatetruecolor($new_width, $new_height);
		imagecopyresampled($new_image['obj'], $image['obj'], 0, 0, ($width-$nw*$ratio)/2, ($height-$nh*$ratio)/2, $new_width, $new_height, $nw*$ratio, $nh*$ratio);
		$new_image['type'] = $image['type'];

		return ImageFile::save($new_image, $_SERVER['DOCUMENT_ROOT'].$new_filename);
	}

	public static function resize($filename, $new_filename, $new_width, $new_height){
		$image = ImageFile::load($_SERVER['DOCUMENT_ROOT'].$filename);
		$new_image = array();
		$new_image['obj'] = imagecreatetruecolor($new_width, $new_height);
		imagecopyresampled($new_image['obj'], $image['obj'], 0, 0, 0, 0, $new_width, $new_height, imagesx($image['obj']), imagesy($image['obj']));
		$new_image['type'] = $image['type'];

		return ImageFile::save($new_image, $_SERVER['DOCUMENT_ROOT'].$new_filename);
	}

	public static function crop($filename, $new_filename, $left, $top, $width, $height){
		$image = ImageFile::load($_SERVER['DOCUMENT_ROOT'].$filename);

		$new_image = array();
		$new_image['obj'] = imagecreatetruecolor($width, $height);
		imagecopy($new_image['obj'], $image['obj'], 0, 0, $left, $top, $width, $height);
		$new_image['type'] = $image['type'];

		ImageFile::save($new_image, $_SERVER['DOCUMENT_ROOT'].$new_filename);
	}

	public static function expand($filename, $new_filename, $new_width, $new_height, $ratio = null, $transparent = false){
		$image = ImageFile::load($_SERVER['DOCUMENT_ROOT'].$filename);

		$width = imagesx($image['obj']);
		$height = imagesy($image['obj']);
		if (isset($ratio)){
			if ($width/$height > $ratio){
				$new_width = $width;
				$new_height = ceil($new_width / $ratio);
			}
		}

		$ratio_x = $width / $new_width;
		$ratio_y = $height / $new_height;
		$nh = 0; $nw = 0; $ratio = 0;
		if ($ratio_x > $ratio_y){
			$nw = $new_width;
			$nh = $nw / $new_width * $new_height;
			$ratio = $ratio_x;
		} else {
			$nh = $new_height;
			$nw = $nh * $new_width / $new_height;
			$ratio = $ratio_y;
		}

		$new_image = array();
		$new_image['obj'] = imagecreatetruecolor($new_width, $new_height);
		if ($transparent){
			imagealphablending($new_image['obj'], true);
			imagesavealpha($new_image['obj'], true);
			$color = imagecolorallocatealpha($new_image['obj'], 255, 255, 255, 127);
		} else {
			$color = imagecolorallocate($new_image['obj'], 255,255,255);
		}

		imagefill($new_image['obj'], 0, 0, $color);
		imagecopyresampled($new_image['obj'], $image['obj'], ($nw - $width/$ratio)/2, ($nh - $height/$ratio)/2, 0, 0, $width/$ratio, $height/$ratio, $width, $height);
		$new_image['type'] = $image['type'];

		return ImageFile::save($new_image, $_SERVER['DOCUMENT_ROOT'].$new_filename);
	}

	private static function load($filename){
		$image = array();
		$image_info = getimagesize($filename);
		$image['type'] = $image_info[2];
		switch ($image['type']) {
			case IMAGETYPE_JPEG:
				$image['obj'] = imagecreatefromjpeg($filename);
				break;
			case IMAGETYPE_GIF:
				$image['obj'] = imagecreatefromgif($filename);
				break;
			case IMAGETYPE_PNG:
				$image['obj'] = imagecreatefrompng($filename);
				break;
			default:
				return false;
				break;
		}
		return $image;
	}

	private static function save($image, $filename){
		switch($image['type']){
			case IMAGETYPE_JPEG:
				imagejpeg($image['obj'], $filename, 100);
				break;
			case IMAGETYPE_GIF:
				imagegif($image['obj'], $filename);
				break;
			case IMAGETYPE_PNG:
				imagepng($image['obj'], $filename);
				break;
			default:
				return false;
				break;
		}
		return true;

	}
}
