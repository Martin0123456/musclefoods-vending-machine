<?php

namespace Musclefoods\inputs;

use PHPUnit\Framework\TestCase;

class CoinInputTest extends TestCase
{
    /*
     * Values taken from
     * https://www.usmint.gov/learn/coin-and-medal-programs/coin-specifications
     *
     * todo access default values from a config
     * Accepted values are in diameter (millimeters) / weight (grams) / value (in USD)
     */

    protected $dollar_coin = [26.5, 8.1, 1];
    protected $dime        = [17.91, 2.268, 0.1];
    protected $nickel      = [21.21, 5, 0.05];
    protected $quarter     = [24.26, 5.67, 0.25];

    // coins identified by criteria (WEIGHT and SIZE)
    public function testCoinsCanBeIdentifiedByWeightAndSize()
    {
        $coin_input = new CoinInput();
        $this->assertEquals($this->nickel, $coin_input->identify([21.21, 5]));
    }

    // value added based upon what was inserted


    // only specific coins are accepted (NICKELS, DIMES and QUARTERS)
    public function testOnlySpecificCoinsAreAccepted()
    {
        $coin_input = new CoinInput();

        $this->assertTrue($coin_input->inputAccepted($this->dime));
        $this->assertTrue($coin_input->inputAccepted($this->nickel));
        $this->assertTrue($coin_input->inputAccepted($this->quarter));

        $this->assertFalse($coin_input->inputAccepted($this->dollar_coin));
    }

    // when a coin is added the total value of what has been added is updated and the display is updated

    // invalid coins are rejected

    // when idle machine displays INSERT COIN
}
