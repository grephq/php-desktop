<?php

require_once __DIR__ . '/PHP-Desktop/PHPG.php';
require_once __DIR__ . '/PHP-Desktop/Window.php';

$parentWindow = new Window('Demo', 700, 700);

// $parentWindow->addText('This is a demo', 320, 400);
// $parentWindow->addButton('Test Button', 200, 200);
// $parentWindow->addCheckBox('Checkbox', 120, 420);
// $parentWindow->addTextField('', 450, 450);
// $parentWindow->addLinkButton('https://github.com/Tomiwa-Ot', 'PHP-Desktop Author', 100, 150);
// $parentWindow->addSwitchButton(true, 250, 450);

PHPG::start($parentWindow);