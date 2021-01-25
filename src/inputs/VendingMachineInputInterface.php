<?php

namespace Musclefoods\inputs;

interface VendingMachineInputInterface
{
    public function inputAccepted($input): bool;

    public function identify(array $input): array;
}