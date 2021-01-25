<?php

namespace Musclefoods;

class VendingMachineInventory implements VendingMachineInventoryInterface
{
    private $inventory;
    private $pricing;

    public function __construct($inventory = null, $pricing = null)
    {
        $this->inventory = $inventory ?? [];
        $this->pricing   = $pricing ?? ['cola' => 1, 'chips' => 0.5, 'candy' => 0.65];  //todo add default to config
    }

    /**
     * @param $name
     * @param $price float // (VALUE IN USD)
     */
    public function setPrice($item_name, $price)
    {
        $this->pricing[$item_name] = $price;
    }

    /**
     * @param $name
     * @param int $quantity
     * @return int
     */
    public function addItem($item_name, $quantity = 1): int
    {
        $this->inventory[$item_name] = !isset($this->inventory[$item_name]) ? $quantity : $this->inventory[$item_name] + $quantity;

        return $this->inventory[$item_name];
    }

    public function subtractItem($item_name, $quantity = 1): int
    {
        $this->inventory[$item_name] = !isset($this->inventory[$item_name]) ? 0 : $this->inventory[$item_name] - $quantity;

        if($this->inventory[$item_name] < 0)
            $this->inventory[$item_name] = 0;

        return $this->inventory[$item_name];
    }

    /**
     * @param $item_name
     * @return float
     */
    public function getPrice($item_name): float
    {
        return $this->pricing[$item_name];
    }

    /**
     * @return array
     */
    public function getAvailableItems(): array
    {
        $filtered = array_filter($this->inventory, function($v, $k){
            return $v > 0;
        }, ARRAY_FILTER_USE_BOTH);

        return array_keys($filtered);
    }
}