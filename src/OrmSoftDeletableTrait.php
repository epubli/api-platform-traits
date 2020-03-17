<?php

namespace Epubli\ApiPlatform\TraitBundle;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use ApiPlatform\Core\Annotation as ApiPlatform;

/**
 * Trait OrmSoftDeletableTrait
 * @package Epubli\ApiPlatform\TraitBundle
 * Make sure to add the validation group "get" to your normalization context,
 * if you are definining the output of routes manually.
 * Add the following annotation to the class in which you are using this trait:
 * [at]Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false, hardDelete=false)
 */
trait OrmSoftDeletableTrait
{
    /**
     * @Groups("get")
     * @var DateTime
     * @ORM\Column(type="datetime", nullable=true)
     * @ApiPlatform\ApiProperty(writable=false)
     */
    protected $deletedAt;

    /**
     * Sets deletedAt.
     *
     * @param DateTime|null $deletedAt
     *
     * @return $this
     */
    public function setDeletedAt(DateTime $deletedAt = null)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Returns deletedAt.
     *
     * @return DateTime|null
     */
    public function getDeletedAt(): ?DateTime
    {
        return $this->deletedAt;
    }

    /**
     * Is deleted?
     * @Groups("get")
     * @return bool
     */
    public function isDeleted(): bool
    {
        return null !== $this->deletedAt;
    }
}
