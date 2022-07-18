<?php

declare(strict_types=1);

namespace App\Form\Extension;

use App\Entity\ProductColor\ProductColor;
use App\Entity\Supplier\Supplier;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductTypeExtension extends AbstractTypeExtension
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

}
