<?php

declare(strict_types=1);

namespace App\Entity\Product;

use App\Entity\ProductColor\ProductColorInterface;
use App\Entity\Supplier\SupplierInterface;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
class Product extends BaseProduct
{
    /**
     * @var SupplierInterface|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Supplier\Supplier", inversedBy="products")
     * @ORM\JoinColumn(name="supplier_id", referencedColumnName="id")
     */
    protected $supplier;

    /**
     * @var ProductColorInterface|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ProductColor\ProductColor", inversedBy="products")
     * @ORM\JoinColumn(name="color_id", referencedColumnName="id")
     */
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

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }
}
