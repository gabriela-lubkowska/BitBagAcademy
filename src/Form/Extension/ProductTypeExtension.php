<?php

declare(strict_types=1);

namespace App\Form\Extension;

use App\Entity\ProductColor;
use App\Entity\Supplier;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormTypeInterface;

final class ProductTypeExtension extends AbstractTypeExtension implements FormTypeInterface
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('supplier', EntityType::class, [
                'class' => Supplier::class,
                'choice_label' => 'name',
                'label' => 'app.ui.supplier',

            ])
            ->add('color', EntityType::class, [
                'class' => ProductColor::class,
                'choice_label' => 'name',
                'label' => 'app.ui.color',

            ])
        ;
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }

    public function getBlockPrefix(): ?string
    {
        return 'Product';
    }

    public function getParent(): ?string
    {
        return ProductType::class;
    }
}
