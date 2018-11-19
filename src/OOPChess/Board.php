<?php

namespace OOPChess;

class Board implements BoardInterface
{
    const X = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];

    /**
     * array
     */
    private $field;

    public function __construct()
    {
        foreach (self::X as $x) {
            for ($y = 1; $y <= 8; $y++) {
                $this->field[$x . $y] = null;
            }
        }
    }

    public function set(FigureInterface $figure, $to)
    {
        if (!key_exists($to, $this->field)) {
            throw new \Exception('Wrong position');
        }

        if (!is_null($this->field[$to])) {
            throw new \Exception('Busy position');
        }

        $this->field[$to] = $figure;
    }

    private function checkMove(FigureInterface $figure, $from, $to)
    {
        $steps = $figure->getPossibleSteps();

        /**
         * Some beautiful expression code
         */

        return true;
    }

    public function move($from, $to)
    {
        if (!key_exists($from, $this->field) || !key_exists($to, $this->field) ) {
            throw new \Exception('Wrong position');
        }

        if (is_null($this->field[$from])) {
            throw new \Exception('Free position');
        }

        $figure = $this->field[$from];

        if ($this->checkMove($figure, $from, $to)) {
            $this->field[$from] = null;
            $this->field[$to] = $figure;
        } else {
            throw new \Exception('Bad move');
        }
    }

    public function show()
    {
        echo PHP_EOL;
        echo ' +-+-+-+-+-+-+-+-+' . PHP_EOL;

        for ($y = 8; $y >= 1; $y--) {
            echo $y;
            foreach (self::X as $x) {
                echo '|';
                echo is_null($this->field[$x . $y]) ? ' ' : '*';
            }
            echo '|' . PHP_EOL;
        }

        echo ' +-+-+-+-+-+-+-+-+' . PHP_EOL;
        echo ' ';
        foreach (self::X as $x) {
            echo '|' . $x;
        }
        echo '|' . PHP_EOL;
    }
}