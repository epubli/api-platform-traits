<?php

namespace Epubli\ApiPlatform\TraitBundle\interfaces;

interface OrmSoftDeletableInterface
{
    public function setDeletedAt(?\DateTime $deletedAt = null): self;
    public function getDeletedAt(): ?\DateTime;
    public function isDeleted(): bool;
}