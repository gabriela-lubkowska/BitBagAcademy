<?php

declare(strict_types=1);

namespace App\DateTime;

interface ClockInterface
{
    public function isNight(): bool;
}
