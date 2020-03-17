<?php

namespace Epubli\ApiPlatform\TraitBundle;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation as ApiPlatform;

/**
 * Trait OrmIdentificatorTrait
 * @package Epubli\ApiPlatform\TraitBundle
 */
trait OrmIdentificatorTrait
{
    /**
     * @Groups({"get"})
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ApiPlatform\ApiProperty(writable=false)
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}