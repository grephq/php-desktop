<?php

/**
 * 	@Class  : PHPDesktop
 *  @Purpose: Create GUI Applications on Linux using PHP
 * 	@Author : Olorunfemi-Ojo Tomiwa
 * 	@Web    : https://github.com/Tomiwa-Ot
 * 	@URL    : https://github.com/grephq/php-desktop
 * 	@Wiki   : https://github.com/grephq/php-desktop/wiki
 */

require_once __DIR__ . '/Color.php';

class PHPDesktop
{
	/**
	 * 	Start GUI Application
	 * 
	 * 	@param int $x
	 * 	@param int $y
	 * 	@param int $width
	 * 	@param int $height
	 * 	@param int $border
	 * 	@param long $borderColor
	 * 	@param long $background
	 * 	@param string $title
	 * 
	 * 	@return int
	 */
	public static function start($x, $y, $width, $height, $border, $borderColor = Color::black(), $background = Color::white(), $title): int
	{
		include __DIR__ . '/util/Source.php';
		start($x, $y, $width, $height, $border, $borderColor, $background, $title);
	}
}