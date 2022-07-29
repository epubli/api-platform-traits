<?php

namespace Epubli\ApiPlatform\TraitBundle\interfaces;

interface OrmTimestampableInterface
{
    public function setCreatedAt(\DateTime $createdAt):self;
    public function getCreatedAt(): \DateTime;
    public function setUpdatedAt(\DateTime $updatedAt):self;
    public function getUpdatedAt(): \DateTime;
}