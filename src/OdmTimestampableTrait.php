<?php

namespace Epubli\ApiPlatform\TraitBundle;

use DateTime;
// use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM; - no longer included
use Gedmo\Mapping\Annotation as Gedmo;
use ApiPlatform\Core\Annotation as ApiPlatform;

/**
 * @deprecated no mongo db support for now
 */
trait OdmTimestampableTrait
{
    /**
     * @var DateTime
     * @ODM\Field(type="date")
     * @Gedmo\Timestampable(on="create")
     * @ApiPlatform\ApiProperty(writable=false)
     */
    public DateTime $createdAt;

    /**
     * @var DateTime
     * @ODM\Field(type="date")
     * @Gedmo\Timestampable(on="update")
     * @ApiPlatform\ApiProperty(writable=false)
     */
    public DateTime $updatedAt;
}
