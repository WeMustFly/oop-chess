<?php

namespace OOPChess;

class Pawn extends Figure
{
    public function getPossibleSteps()
    {
        return ['y+1'];
    }
}