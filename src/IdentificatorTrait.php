<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use ApiPlatform\Core\Annotation as ApiPlatform;

trait IdentificatorTrait
{
    /**
     * @var int
     * @ODM\Id(strategy="INCREMENT", type="int")
     * @ApiPlatform\ApiProperty(writable=false)
     */
    public $id;
}
