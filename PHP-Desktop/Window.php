<?php

class Window
{

	private $title;

	private $width;

	private $height;

	public function __construct($title, $width, $height) {
		$this->title = $title;
		$this->width = $width;
		$this->height = $height;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getWidth() {
		return $this->width;
	}

	public function getHeight() {
		return $this->height;
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	public function setWidth($width) {
		$this->width = $width;
	}

	public function setHeight($height) {
		$this->height = $height;
	}

	public function addButton($label, $x, $y) {
		include __DIR__ . '/util/Source.php';
		add_button($label, $x, $y);
	}

	public function addCheckBox($label, $x, $y) {
		include __DIR__ . '/util/Source.php';
		add_check_button($label, $x, $y);	
	}

	public function addTextField($defaultText, $x, $y) {
		include __DIR__ . '/util/Source.php';
		add_button($defaultText, $x, $y);
	}

	public function showMessageDialog() {

	}

	public function addMenuBar() {
		
	}

	public function addRadio() {

	}

	public function addLinkButton($link, $label, $x, $y) {
		include __DIR__ . '/util/Source.php';
		add_link_button($link, $label, $x, $y);
	}

	public function addSwitchButton($active = false, $x, $y) {
		include __DIR__ . '/util/Source.php';
		if($active)
			add_switch(1, $x, $y);
		else
			add_switch(0, $x, $y);
	}

	public function addText($text, $x, $y) {
		include __DIR__ . '/util/Source.php';
		add_label($text, $x, $y);
	}

	public function addImage($image, $x, $y) {
		include __DIR__ . '/util/Source.php';
		add_image($image, $x, $y);
	}
}