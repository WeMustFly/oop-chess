<?php

\spl_autoload_register(function ($class) {
    $classFilename = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR
        . \str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

    require $classFilename;
});

$board = new \OOPChess\Board();
$pawn = new \OOPChess\Pawn();

$board->show();
$board->set($pawn, 'e2');
$board->show();
$board->move('e2', 'e3');
$board->show();
$board->move('e3', 'e4');
$board->show();
