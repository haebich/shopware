<?php

namespace Shopware\Shop\Extension;

use Shopware\Context\Struct\TranslationContext;
use Shopware\Framework\Factory\DetailFactoryExtensionInterface;
use Shopware\Search\QueryBuilder;
use Shopware\Search\QuerySelection;
use Shopware\Shop\Event\ShopBasicLoadedEvent;
use Shopware\Shop\Event\ShopDetailLoadedEvent;
use Shopware\Shop\Event\ShopWrittenEvent;
use Shopware\Shop\Struct\ShopBasicStruct;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

abstract class ShopExtension implements DetailFactoryExtensionInterface, EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            ShopBasicLoadedEvent::NAME => 'shopBasicLoaded',
            ShopDetailLoadedEvent::NAME => 'shopDetailLoaded',
            ShopWrittenEvent::NAME => 'shopWritten',
        ];
    }

    public function joinDependencies(
        QuerySelection $selection,
        QueryBuilder $query,
        TranslationContext $context
    ): void {
    }

    public function getDetailFields(): array
    {
        return [];
    }

    public function getBasicFields(): array
    {
        return [];
    }

    public function hydrate(
        ShopBasicStruct $shop,
        array $data,
        QuerySelection $selection,
        TranslationContext $translation
    ): void {
    }

    public function shopBasicLoaded(ShopBasicLoadedEvent $event): void
    {
    }

    public function shopDetailLoaded(ShopDetailLoadedEvent $event): void
    {
    }

    public function shopWritten(ShopWrittenEvent $event): void
    {
    }
}
