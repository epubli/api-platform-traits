<?php

namespace Epubli\ApiPlatform\TraitBundle;

use ApiPlatform\Core\Annotation\ApiProperty;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * ## Trait OrmSoftDeletableTrait
 * Make sure to add the validation group "get" to your normalization context,
 * if you are defining the output of routes manually.
 * Add the following annotation to the class in which you are using this trait:
 * Add implements OrmSoftDeletableInterface as well
 *
 * ### \#[Gedmo\SoftDeleteable(fieldName: 'deletedAt', timeAware: false, hardDelete: false)]
 * @package Epubli\ApiPlatform\TraitBundle
 * @see OrmSoftDeletableInterface
 */
trait OrmSoftDeletableTrait
{
    #[Column(name: 'deleted_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    #[ApiProperty(writable: false, required: false)]
    #[Groups('get')]
    protected ?\DateTime $deletedAt;

    public function setDeletedAt(?\DateTime $deletedAt = null): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }

    #[Groups('get')]
    public function isDeleted(): bool
    {
        return null !== $this->deletedAt;
    }
}
