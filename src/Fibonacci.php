<?php
namespace RM;

use Exception;

/**
 * Class Fibonacci
 * @package RM\Fibonacci
 */
class Fibonacci
{
    /**
     * @param int $position
     * @return int|float
     * @throws Exception
     */
    public function getNumber(int $position)
    {
        $this->checkForPositivityNumber($position);

        return round(((5 ** .5 + 1) / 2) ** $position / 5 ** .5);
    }

    /**
     * @param int $count
     * @return array
     * @throws Exception
     */
    public function getSeries(int $count): array
    {
        $this->checkForPositivityNumber($count);

        $series = [];
        for ($i = 0; $i <= $count; $i++) {
            $series[] = $this->getNumber($i);
        }
        return $series;
    }

    /**
     * @param int $count
     * @throws Exception
     */
    public function showSeries(int $count): void
    {
        $this->checkForPositivityNumber($count);

        $series = $this->getSeries($count);

        echo implode(' ', $series);
    }

    private function checkForPositivityNumber(int $number): void
    {
        if (!is_int($number)) {
            throw new Exception("Number must be integer");
        }
        if ($number < 0) {
            throw new Exception("Number must be positive");
        }
    }
}
