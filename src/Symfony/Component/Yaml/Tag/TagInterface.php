<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Yaml\Tag;

interface TagInterface
{
    /**
     * @param string $value a plain scalar
     *
     * @return mixed
     */
    public function construct($value);
}
