<?php

namespace Musclefoods;

use Musclefoods\inputs\VendingMachineInputInterface;
use PHPUnit\Framework\TestCase;

class VendingMachineTest extends TestCase
{
    /*
     * Inputs
     */

    //vending machine has input mechanism
    public function testVendingMachineHasInputMechanism(){
        $vending_machine = new VendingMachine();
        $this->assertNotEmpty($vending_machine->getInputHandle());
    }

    //vending machine can accept INPUTS (money)
    public function testVendingMachineHasAbilityToAcceptInputs(){
        $vending_machine = new VendingMachine();
        $this->assertNotEmpty($vending_machine->getInputHandle());
        $this->assertInstanceOf('Musclefoods\inputs\CoinInput', $vending_machine->getInputHandle());
    }

    //vending machine can make change

    /*
     * Inventory Management
     */

    //vending machine can maintain inventory
    public function testVendingMachineProvidesInventoryList(){
        $vending_machine = new VendingMachine();
        $this->assertNotEmpty($vending_machine->getInventory());
    }

    //vending machine can dispense products
//    public function testVendingMachineTriggersDispensingOfProducts(){
//        $vending_machine = new VendingMachine();
        // todo verify dispensing of products
//    }

    //vending machine can allow selection of product
    public function testVendingMachineHasInventory(){
        $vending_machine = new VendingMachine();
        $this->assertNotEmpty($vending_machine->getInventory());
    }

    //vending machine dispenses correct change
    public function testVendingMachineProvidesExactChange(){
        $vending_machine = new VendingMachine();

        //todo validate machine calculates the exact change

    }

    //vending machine displays when exact change is required

    /*
     * Outputs
     */

    //vending machine can update display
    public function testVendingMachineHasDisplay()
    {
        $vending_machine = new VendingMachine();
        $this->assertNotEmpty($vending_machine->getOutputHandle());
    }
}
