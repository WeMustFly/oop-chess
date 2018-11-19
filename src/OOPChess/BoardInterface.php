<?php

namespace OOPChess;

interface BoardInterface
{
    public function set(FigureInterface $figure, $to);
    public function move($from, $to);
    public function show();
}
