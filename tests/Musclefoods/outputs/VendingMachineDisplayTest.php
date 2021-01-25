<?php

namespace Musclefoods\outputs;

use PHPUnit\Framework\TestCase;

class VendingMachineDisplayTest extends TestCase
{
    // test that INSERT COIN is displayed when no money is present and button for product is pressed
    public function testInsertCoinIsDisplayedWhenNoMoneyIsPresentAndButtonIsPressed(){}

    // when not enough money has been inserted, display will render PRICE and will display INSERT COIN or CURRENT AMOUNT
    // test that CURRENT AMOUNT is displayed when not enough money is added
    public function testCurrentAmountIsDisplayedWhenNotEnoughMoneyIsAdded(){

    }

    // when enough money has been inserted, and button is pressed for COLA, price is displayed
    public function testPriceIsDisplayedOnButtonPress(){

    }
}
