<?php

/**
 * 	Create windows and add widgets them
 */

class Window
{

	/** @var string $title Window title */
	private $title;

	/** @var int $width Window width */
	private $width;

	/** @var int $height Window height */
	private $height;

	public function __construct($title, $width, $height)
	{
		$this->title = $title;
		$this->width = $width;
		$this->height = $height;
	}

	/**
	 * 	Window title getter
	 * 
	 *	@return string 
	 */
	public function getTitle(): string
	{
		return $this->title;
	}

	/**
	 * 	Window width getter
	 * 
	 * 	@return int
	 */
	public function getWidth(): int
	{
		return $this->width;
	}

	/**
	 * 	Window height getter
	 * 
	 * 	@return int
	 */
	public function getHeight(): int
	{
		return $this->height;
	}

	/**
	 * 	Window title setter
	 * 
	 * 	@param $title
	 */
	public function setTitle($title): void
	{
		$this->title = $title;
	}

	/**
	 * 	Window width setter
	 * 
	 * 	@param $width
	 */
	public function setWidth($width): void
	{
		$this->width = $width;
	}

	/**
	 * 	Window height setter
	 * 
	 * 	@param $height
	 */
	public function setHeight($height): void
	{
		$this->height = $height;
	}

	/**
	 * 	Add button to window
	 * 
	 * 	@param $label
	 * 	@param $x
	 * 	@param $y
	 */
	public function addButton($label, $x, $y): void
	{
		include __DIR__ . '/util/Source.php';
		add_button($label, $x, $y);
	}

	/**
	 * 	Add checkbox to window
	 * 
	 * 	@param $label
	 * 	@param $x
	 * 	@param $y
	 */
	public function addCheckBox($label, $x, $y): void
	{
		include __DIR__ . '/util/Source.php';
		add_check_button($label, $x, $y);	
	}

	/**
	 * 	Add textfield to window
	 * 
	 * 	@param $defaultText
	 * 	@param $x
	 * 	@param $y
	 */
	public function addTextField($defaultText, $x, $y): void
	{
		include __DIR__ . '/util/Source.php';
		add_button($defaultText, $x, $y);
	}

	public function showMessageDialog(): void
	{

	}

	public function addMenuBar(): void
	{
		
	}

	public function addRadio(): void
	{

	}

	/**
	 * 	Add link button to window
	 * 
	 * 	@param $link
	 * 	@param $label
	 * 	@param $x
	 * 	@param $y
	 */
	public function addLinkButton($link, $label, $x, $y): void
	{
		include __DIR__ . '/util/Source.php';
		add_link_button($link, $label, $x, $y);
	}

	/**
	 * 	Add switch  to window
	 * 
	 * 	@param $active
	 * 	@param $x
	 * 	@param $y
	 */
	public function addSwitchButton($active = false, $x, $y): void
	{
		include __DIR__ . '/util/Source.php';
		if($active)
			add_switch(1, $x, $y);
		else
			add_switch(0, $x, $y);
	}

	/**
	 * 	Add text to window
	 * 
	 * 	@param $text
	 * 	@param $x
	 * 	@param $y
	 */
	public function addText($text, $x, $y): void
	{
		include __DIR__ . '/util/Source.php';
		add_label($text, $x, $y);
	}

	/**
	 * 	Add image to window
	 * 
	 * 	@param $image
	 * 	@param $x
	 * 	@param $y
	 */
	public function addImage($image, $x, $y): void
	{
		include __DIR__ . '/util/Source.php';
		add_image($image, $x, $y);
	}
}