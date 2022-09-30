<?php


class PHPG
{
	public static function start($window)
	{
		include __DIR__ . '/util/Source.php';
		start($window->getTitle(), $window->getWidth(), $window->getHeight());
	}
}