<?php

/**
 *  Class for handling windows
 */

require_once __DIR__ . '/Color.php';

class Window
{

    /** @var int $parentX Parent window X coordinate */
    public static $parentX;

    /** @var int $parentY Parent window Y coordinate */
    public static $parentY;

    /** @var int $parentWidth Parent window width */
    public static $parentWidth;

    /** @var int $parentHeight Parent window height */
    public static $parentHeight;

    /** @var int $parentBorder Parent window border width */
    public static $parentBorder;

    /** @var long $parentBorderColor Parent window border color */
    public static $parentBorderColor;

    /** @var long $parentBackground Parent window background color */
    public static $parentBackground;

    /** @var string $parentTitle Parent window title */
    public static $parentTitle;

    /** @var int $x Window X coordinate */
    private $x;

    /** @var int $y Window Y coordinate */
    private $y;

    /** @var int $width Window width */
    private $width;

    /** @var int $height Window height */
    private $height;

    /** @var int $border Window border width */
    private $border;

    /** @var long $borderColor Window border color */
    private $borderColor;

    /** @var long $background Window background color */
    private $background;

    /** @var string $title Window title */
    private $title;

    /** 
     *  Parent window parameters
     * 
     *  @param int $x
     *  @param int $y
     *  @param int $width
     *  @param int $height
     *  @param int $border
     *  @param long $borderColor
     *  @param long $background
     *  @param string $title
     */
    public static function parentWindow($x, $y, $width, $height, $border, $borderColor = Color::black(), $background = Color::white(), $title)
    {
        self::$parentX = $x;
        self::$parentY = $y;
        self::$parentWidth = $width;
        self::$parentHeight = $height;
        self::$parentBorder = $border;
        self::$parentBorderColor = $borderColor;
        self::$parentBackground = $background;
        self::$parentTitle = $title;
    }

    /** Return parent window  */
    public static function getParent()
    {
        include __DIR__ . '/util/Source.php';
        return getParentWindow();
    }

    /** 
     *  Create child window
     * 
     *  @param int $x
     *  @param int $y
     *  @param int $width
     *  @param int $height
     *  @param int $border
     *  @param long $borderColor
     *  @param long $background
     *  @param string $title
     */
    public function __construct$x, $y, $width, $height, $border, $borderColor = Color::black(), $background = Color::white(), $title)
    {
        $this->x = $x;
        $this->$y = $y;
        $this->$width = $width;
        $this->$height = $height;
        $this->$border = $border;
        $this->$borderColor = $borderColor;
        $this->$background = $background;
    }

    public function addText()
    {

    }

    public function addMedia()
    {

    }

    public function addButton()
    {

    }

    public function addTextField()
    {

    }

    public function addCheckbox()
    {

    }

    public function changeBackground()
    {

    }
}
