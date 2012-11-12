<?php

/**
 * This file is part of Sylex project.
 *
 *  (c) Саша Стаменковић <umpirsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylex;

use Pimple;

/**
 * Should be implemented by classes that depends on Pimple DI container.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
interface ContainerAwareInterface
{
    /**
     * Sets Pimple DI container.
     *
     * @param Pimple $container
     */
    public function setContainer(Pimple $container);
}
