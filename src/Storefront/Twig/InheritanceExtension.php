<?php

namespace Shopware\Storefront\Twig;

use Shopware\Storefront\Twig\TokenParser\ExtendsTokenParser;
use Shopware\Storefront\Twig\TokenParser\IncludeTokenParser;

class InheritanceExtension extends \Twig_Extension
{
    /**
     * @var TemplateFinder
     */
    private $finder;

    public function __construct(TemplateFinder $finder)
    {
        $this->finder = $finder;
    }

    public function getTokenParsers(): array
    {
        return [
            new ExtendsTokenParser($this->finder),
            new IncludeTokenParser($this->finder),
        ];
    }
}