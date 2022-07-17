<?php

declare(strict_types=1);

namespace App\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMainMenuListener
{
    public function addSupplierMenu(MenuBuilderEvent $event): void
    {
       $configurationMenu = $event->getMenu()->getChild('configuration');

       $configurationMenu
           ->addChild('suppliers', [ 'route' => 'app_admin_supplier_index'])
           ->setLabel('app.ui.suppliers')
           ->setLabelAttribute('icon', 'address card outline');
    }

    public function addColorMenu(MenuBuilderEvent $event): void
    {
        $configurationMenu = $event->getMenu()->getChild('configuration');

        $configurationMenu
            ->addChild('colors', [ 'route' => 'app_admin_color_index'])
            ->setLabel('app.ui.colors')
            ->setLabelAttribute('icon', 'paint brush');
    }
}
