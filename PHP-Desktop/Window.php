<?php

/**
 *  Class for handling windows
 */

require_once __DIR__ . '/Color.php';

class Window
{
    public static function parentWindow()
    {
        include __DIR__ . '/util/Source.php';
        getParentWindow();

    }

    public static function createChildWindow($x, $y, $width, $height, $border, $borderColor = Color::black(), $background = Color::white(), $title): Window
    {

    }

    public static function addText()
    {

    }
}
