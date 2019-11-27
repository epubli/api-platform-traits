<?php

namespace Epubli\ApiPlatform\TraitBundle;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use ApiPlatform\Core\Annotation as ApiPlatform;

trait OrmTimestampableTrait
{
    /**
     * @var DateTime
     * @ORM\Field(type="date")
     * @Gedmo\Timestampable(on="create")
     * @ApiPlatform\ApiProperty(writable=false)
     */
    public $createdAt;

    /**
     * @var DateTime
     * @ORM\Field(type="date")
     * @Gedmo\Timestampable(on="update")
     * @ApiPlatform\ApiProperty(writable=false)
     */
    public $updatedAt;
}
