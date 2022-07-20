<?php

declare(strict_types=1);

namespace App\Fixture;

use App\Entity\SupplierInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Generator;
use Sylius\Bundle\FixturesBundle\Fixture\AbstractFixture;
use Sylius\Bundle\FixturesBundle\Fixture\FixtureInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

final class SupplierFixture extends AbstractFixture implements FixtureInterface
{
    /** @var FactoryInterface */
    private FactoryInterface $supplierFactory;

    /** @var ObjectManager */
    private ObjectManager $supplierManager;

    /** @var Generator  */
    private Generator $generator;

    public function __construct(FactoryInterface $supplierFactory, ObjectManager $supplierManager, Generator $generator)
    {
        $this->supplierFactory = $supplierFactory;
        $this->supplierManager = $supplierManager;
        $this->generator = $generator;
    }


    public function load(array $options): void
    {
        for ($i = 0; $i < $options['count']; $i++) {
            /** @var SupplierInterface $supplier */
            $supplier = $this->supplierFactory->createNew();
            $supplier->setEmail($this->generator->companyEmail);
            $supplier->setName($this->generator->company);
            $this->supplierManager->persist($supplier);
        }

        $this->supplierManager->flush();
    }

    public function getName(): string
    {
        return 'supplier';
    }

    protected function configureOptionsNode(ArrayNodeDefinition $optionsNode): void
    {
        $optionsNode
            ->children()
            ->integerNode('count')
        ;
    }


}
