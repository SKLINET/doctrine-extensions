<?php

namespace SKLINET\DoctrineExtensionsBundle\Translatable\Entity;

use Doctrine\ORM\Mapping as ORM;
use SKLINET\DoctrineExtensionsBundle\Translatable\Entity\MappedSuperclass\AbstractPersonalTranslation;

/**
 * SKLINET\DoctrineExtensionsBundle\Translatable\Entity\Translation
 */
#[ORM\Table(name: "ext_translations", options: ["row_format" => "DYNAMIC"])]
#[ORM\Index(name: "translations_lookup_idx", columns: ["locale", "object_class", "foreign_key"])]
#[ORM\UniqueConstraint(name: "lookup_unique_idx", columns: ["locale", "object_class", "foreign_key"])]
#[ORM\Entity(repositoryClass: "SKLINET\DoctrineExtensionsBundle\Translatable\Entity\Repository\TranslationRepository")]
class Translation extends AbstractPersonalTranslation
{
    /**
     * All required columns are mapped through inherited superclass
     */
}
