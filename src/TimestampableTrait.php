<?php

namespace App\Document;

use DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Gedmo\Mapping\Annotation as Gedmo;
use ApiPlatform\Core\Annotation as ApiPlatform;

trait TimestampableTrait
{
    /**
     * @var DateTime
     * @ODM\Field(type="date")
     * @Gedmo\Timestampable(on="create")
     * @ApiPlatform\ApiProperty(writable=false)
     */
    public $createdAt;

    /**
     * @var DateTime
     * @ODM\Field(type="date")
     * @Gedmo\Timestampable(on="update")
     * @ApiPlatform\ApiProperty(writable=false)
     */
    public $updatedAt;
}
