<?php

/**
 * 	Class for handling text
 */

class Text
{

	/** @var string $text String to display */
	private $text;

	/** @var int $x X coordniate to place string */
	private $x;

	/** @var int $y Y coordniate to place string */
	private $y;

	/** @var long $background String background color */
	private $background;

	/** @var long $foreground String foreground color */
	private $foreground;

	/** @var Window $window Window to place the string */
	private $window;

	/**
	 * 	Create text
	 * 	
	 * 	@param string $text
	 * 	@param int $x
	 * 	@param int $y
	 * 	@param long $background
	 * 	@param long $foreground
	 * 	@param Window $window
	 */
	public function __construct($text, $x, $y, $background, $foreground, $window)
	{
		$this->text = $text;
		$this->x = $x;
		$this->y = $y;
		$this->background = $background;
		$this->foreground = $foreground;
		$this->window = $window;
	}

	/** Return text */
	public function getText(): string
	{
		return $this->text;
	}

	/** Return text X coordinate */
	public function getX(): int
	{
		return $this->x;
	}

	/** Return text Y coordinate */
	public function getY(): int
	{
		return $this->y;
	}

	/** Return text background color */
	public function getBackground(): long
	{
		return $this->background;
	}

	/** Return text foreground color */
	public function getForeground(): long
	{
		return $this->foreground;
	}

	/** Return text window */
	public function getWindow()
	{
		return $this->window;
	}
}