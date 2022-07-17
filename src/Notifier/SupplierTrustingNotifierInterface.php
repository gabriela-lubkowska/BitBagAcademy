<?php

declare(strict_types=1);

namespace App\Notifier;

use App\Entity\Supplier\SupplierInterface;

interface SupplierTrustingNotifierInterface
{
    public function notify(SupplierInterface $supplier): void;
}
