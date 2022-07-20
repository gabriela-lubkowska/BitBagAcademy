<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\Collection;

class ProductColor implements ProductColorInterface
{
    /** @var int */
    protected $id;

    /**  @var string */
    protected $name;

    /** @var Collection */
    protected $products;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getProducts(): Collection
    {
        return $this->products;
    }
}
