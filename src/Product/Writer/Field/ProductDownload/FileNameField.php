<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductDownload;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\StringField;

class FileNameField extends StringField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('fileName', 'file_name', 'product_download', $constraintBuilder);
    }
}