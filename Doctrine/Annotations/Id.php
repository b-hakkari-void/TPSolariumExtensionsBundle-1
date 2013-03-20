<?php
/**
 * Id.php
 *
 * This file is part of the SolariumExtensionsBundle.
 * Read the LICENSE file in the root of the project for information on copyright.
 *
 * @author Thomas Ploch <tp@responsive-code.de>
 * @since  19.03.13
 */
namespace TP\SolariumExtensionsBundle\Doctrine\Annotations;

use Doctrine\Common\Annotations\Annotation;

/**
 * Class Id
 *
 * @package TP\SolariumExtensionsBundle\Doctrine\Annotations
 */
class Id extends Annotation
{
    /**
     * Holds the default ID field for the Document
     *
     * @var string
     */
    public $name = 'id';
}
