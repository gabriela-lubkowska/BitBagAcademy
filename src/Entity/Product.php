<?php

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct
{
    /** @var SupplierInterface|null */
    protected $supplier;

    /** @var ProductColorInterface|null */
    protected $color;

    public function getColor(): ?ProductColorInterface
    {
        return $this->color;
    }

    public function setColor(?ProductColorInterface $color): void
    {
        $this->color = $color;
    }

    public function getSupplier(): ?SupplierInterface
    {
        return $this->supplier;
    }

    public function setSupplier(?SupplierInterface $supplier): void
    {
        $this->supplier = $supplier;
    }
}
