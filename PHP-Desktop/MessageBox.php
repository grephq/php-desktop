<?php


class MessageBox
{

	private $title;

	private $body;

	private $buttons = array('Yes', 'No');

	public function __construct($title, $body, $buttons)
	{
		self::$title = $title;
		self::$body = $body;
		self::$buttons = $buttons;
	}

	public function setEvent($button, $callback)
	{

	}
}