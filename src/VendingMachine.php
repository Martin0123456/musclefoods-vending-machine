<?php

namespace Musclefoods;

use Musclefoods\inputs\CoinInput;
use Musclefoods\inputs\VendingMachineInputInterface;
use Musclefoods\outputs\VendingMachineDisplay;
use Musclefoods\outputs\VendingMachineOutputInterface;

class VendingMachine
{
    protected $inventory;
    protected $input_handle;
    protected $output_handle;

    public function __construct(VendingMachineInventoryInterface $inventory = null, VendingMachineInputInterface $input_handle = null, VendingMachineOutputInterface $output_handle = null)
    {
        $this->inventory     = $inventory ?? new VendingMachineInventory();
        $this->input_handle  = $input_handle ?? new CoinInput();
        $this->output_handle = $output_handle ?? new VendingMachineDisplay();
    }

    /**
     * @return VendingMachineInventoryInterface
     */
    public function getInventory(): VendingMachineInventoryInterface
    {
        return $this->inventory;
    }

    /**
     * @return VendingMachineInputInterface
     */
    public function getInputHandle(): VendingMachineInputInterface
    {
        return $this->input_handle;
    }

    /**
     * @return VendingMachineOutputInterface
     */
    public function getOutputHandle(): VendingMachineOutputInterface
    {
        return $this->output_handle;
    }

    /**
     * Returns whether the product was dispensed successfully
     *
     * @return bool
     */
    public function dispense($product): bool
    {
        //todo interact with hardware to dispense product

        return false;
    }
}