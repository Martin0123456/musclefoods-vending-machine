<?php

namespace Musclefoods;

use PHPUnit\Framework\TestCase;

class VendingMachineInventoryTest extends TestCase
{
    // inventory returns a list of available products
    public function testProvidesAListOfAvailableItems()
    {
        $vending_machine_inventory = new VendingMachineInventory();
        $this->assertEmpty($vending_machine_inventory->getAvailableItems());

        $vending_machine_inventory->addItem('cola');
        $this->assertCount(1, $vending_machine_inventory->getAvailableItems());

        $vending_machine_inventory->subtractItem('cola');
        $this->assertCount(0, $vending_machine_inventory->getAvailableItems());
    }

    // inventory returns a price for a product
    public function testReturnsAPriceForAnItem()
    {
        $vending_machine_inventory = new VendingMachineInventory();

        $this->assertEquals(1, $vending_machine_inventory->getPrice('cola'));
        $this->assertEquals(0.5, $vending_machine_inventory->getPrice('chips'));
        $this->assertEquals(0.65, $vending_machine_inventory->getPrice('candy'));
    }

    public function testSetPriceForAnItem()
    {
        $item_name  = 'cola';

        $vending_machine_inventory = new VendingMachineInventory();
        $vending_machine_inventory->getPrice($item_name);

        //ensure this matches the default
        $this->assertEquals(1, $vending_machine_inventory->getPrice($item_name));

        //ensure markups can be accounted for
        $cola_price = 1.2;

        $vending_machine_inventory->setPrice($item_name, $cola_price);
        $this->assertEquals($cola_price, $vending_machine_inventory->getPrice($item_name));
    }
}
