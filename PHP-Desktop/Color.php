<?php

/**
 * 	Class for handling colors	
 */

class Color
{
	/**
	 * 	RGB Color Code
	 * 
	 * 	@param long $red
	 * 	@param long $green
	 * 	@param long $blue
	 * 
	 * 	@return long
	 */
	public static function rgb($red, $green, $blue): long
	{
		include(__DIR__ . '/util/Source.php');
		if($red > 255) {
			$red = $red % 255;
		}
		if($green > 255) {
			$green = $green % 255;
		}
		if($blue > 255) {
			$blue = $blue % 255;
		}
		return rgb($red, $green, $blue);
	}

	/**
	 * 	Red RGB Code RGB(255, 0, 0)
	 * 
	 * 	@return long
	 */
	public static function red(): long
	{
		include(__DIR__ . '/util/Source.php');
		return red();
	}

	/**
	 * 	Green RGB Code RGB(0, 255, 0)
	 * 
	 * 	@return long
	 */
	public static function green(): long
	{
		include(__DIR__ . '/util/Source.php');
		return green();
	}

	/**
	 * 	Blue RGB Code RGB(0, 0, 255)
	 * 
	 * 	@return long
	 */
	public static function blue(): long
	{
		include(__DIR__ . '/util/Source.php');
		return blue();	
	}

	/**
	 * 	White RGB Code RGB(255, 255, 255)
	 * 
	 * 	@return long
	 */
	public static function white(): long
	{
		include(__DIR__ . '/util/Source.php');
		return white();
	}

	/**
	 * 	Black RGB Code RGB(0, 0, 0)
	 * 
	 * 	@return long
	 */
	public static function black(): long
	{
		include(__DIR__ . '/util/Source.php');
		return black();
	}
}