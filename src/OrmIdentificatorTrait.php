<?php

namespace Epubli\ApiPlatform\TraitBundle;

use ApiPlatform\Core\Annotation\ApiProperty;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Gedmo\Mapping\Annotation\Timestampable;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Trait OrmIdentificatorTrait
 * If used you should implement OrmIdentificatorInterface
 * @package Epubli\ApiPlatform\TraitBundle
 * @see OrmIdentificatorInterface
 */
trait OrmIdentificatorTrait
{
    #[Id, GeneratedValue, Column(type: Types::INTEGER)]
    #[Timestampable(on: 'create')]
    #[ApiProperty(writable: false, required: false)]
    #[Groups('get')]
    private ?int $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}