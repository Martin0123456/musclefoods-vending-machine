<?php

namespace Musclefoods;

class VendingMachineFacade
{
    protected $vending_machine;

    public function __construct(VendingMachine $vendingMachine = null)
    {
        $this->vending_machine = new VendingMachine();
    }

    /**
     * @param $input
     */
    public function addInput($input)
    {
        $this->vending_machine->getInput()->inputAccepted($input);
    }

    public function pushButton($button)
    {
        //todo add mappings for button presses to get product name

        //todo validate state

        $this->vending_machine->dispense('cola');
    }
}