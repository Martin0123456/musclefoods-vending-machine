<?php

namespace Musclefoods\inputs;

class CoinInput implements VendingMachineInputInterface
{
    /*
     * Values taken from
     * https://www.usmint.gov/learn/coin-and-medal-programs/coin-specifications
     *
     * todo access default values from a config
     * Accepted values are in diameter (millimeters) / weight (grams) / value (in USD)
     */
    protected $accepted_list = [
        [21.21, 5, 0.05],       //nickel
        [17.91, 2.268, 0.1],    //dime
        [24.26, 5.67, 0.25]     //quarter
    ];

    public function __construct($accepted_list = null)
    {
        $this->accepted_list = $accepted_list ?? $this->accepted_list;
    }

    public function inputAccepted($input): bool
    {
        return in_array($input, $this->accepted_list);
    }

    public function identify(array $input): array {
        foreach($this->accepted_list as $accepted_item)
            if(($input[0] == $accepted_item[0]) && ($input[1] == $accepted_item[1]))
                return $accepted_item;

        return [];
    }
}