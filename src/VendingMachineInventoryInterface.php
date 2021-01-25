<?php

namespace Musclefoods;

interface VendingMachineInventoryInterface
{
    public function setPrice($product_name, $price);

    public function getPrice($product_name): float;

    public function getAvailableItems(): array;

    public function addItem($product_name, $quantity): int;
}