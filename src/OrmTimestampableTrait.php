<?php

namespace Epubli\ApiPlatform\TraitBundle;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use ApiPlatform\Core\Annotation as ApiPlatform;

/**
 * Trait OrmTimestampableTrait
 * @package Epubli\ApiPlatform\TraitBundle
 * Make sure to add the validation group "get" to your normalization context,
 * if you are definining the output of routes manually.
 */
trait OrmTimestampableTrait
{
    /**
     * @Groups("get")
     * @var DateTime
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     * @ApiPlatform\ApiProperty(writable=false)
     */
    protected $createdAt;

    /**
     * @Groups("get")
     * @var DateTime
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     * @ApiPlatform\ApiProperty(writable=false)
     */
    protected $updatedAt;

    /**
     * Sets createdAt.
     *
     * @param DateTime $createdAt
     * @return $this
     */
    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Returns createdAt.
     *
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets updatedAt.
     *
     * @param DateTime $updatedAt
     * @return $this
     */
    public function setUpdatedAt(DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Returns updatedAt.
     *
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }
}
