<?php

/**
 * 	@Class  : PHPDesktop
 *  @Purpose: Create GUI Applications on Linux using PHP
 * 	@Author : Olorunfemi-Ojo Tomiwa
 * 	@Web    : https://github.com/Tomiwa-Ot
 * 	@URL    : https://github.com/grephq/php-desktop
 * 	@Wiki   : https://github.com/grephq/php-desktop/wiki
 */

require_once __DIR__ . '/Window.php';

class PHPDesktop
{
	/**
	 * 	Start GUI Application
	 * 
	 * 	@return int
	 */
	public static function start(): int
	{
		include __DIR__ . '/util/Source.php';
		return start(Window::$parentX, Window::$parentY, Window::$parentWidth, Window::$parentHeight, Window::$parentBorder, Window::$parentBorderColor, $background, Window::$parentTitle);
	}
}