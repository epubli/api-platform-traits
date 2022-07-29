<?php

namespace Epubli\ApiPlatform\TraitBundle;

use ApiPlatform\Core\Annotation\ApiProperty;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Epubli\ApiPlatform\TraitBundle\interfaces\OrmTimestampableInterface;
use Gedmo\Mapping\Annotation\Timestampable;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * ## Trait OrmTimestampableTrait
 * Make sure to add the validation group "get" to your normalization context,
 * if you are definining the output of routes manually.
 * Implement OrmTimestampableInterface if you use this
 *
 * @package Epubli\ApiPlatform\TraitBundle
 * @see OrmTimestampableInterface
 */
trait OrmTimestampableTrait
{
    #[Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    #[Timestampable(on: 'create')]
    #[ApiProperty(writable: false, required: false)]
    #[Groups('get')]
    protected \DateTime $createdAt;

    #[Column(name: 'updated_at',type: Types::DATETIME_MUTABLE)]
    #[Timestampable(on: 'update')]
    #[ApiProperty(writable: false, required: false)]
    #[Groups('get')]
    protected \DateTime $updatedAt;

    public function setCreatedAt(\DateTime $createdAt):self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt):self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
}
