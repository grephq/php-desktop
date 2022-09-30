<?php

/**
 *	@Class  : PHPG
 * 	@Purpose: GTK wrapper for creating GUI applications using php
 * 	@Author : Olorunfemi-Ojo Tomiwa
 * 	@Web    : https://github.com/Tomiwa-Ot
 * 	@URL    : https://github.com/grephq/php-desktop
 * 	@Wiki   : https://github.com/grephq/php-desktop/wiki
 */

class PHPG
{

	/**
	 *	Start GUI application
	 * 	
	 * 	@param $window 
	 */
	public static function start($window): void
	{
		include __DIR__ . '/util/Source.php';
		start($window->getTitle(), $window->getWidth(), $window->getHeight());
	}
}