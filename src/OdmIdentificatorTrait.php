<?php

namespace Epubli\ApiPlatform\TraitBundle;

use ApiPlatform\Core\Annotation as ApiPlatform;
// use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM; - no longer included

/**
 * @deprecated no mongo db support for now
 */
trait OdmIdentificatorTrait
{
    /**
     * @var int
     * @ODM\Id(strategy="INCREMENT", type="int")
     * @ApiPlatform\ApiProperty(writable=false)
     */
    public int $id;
}
