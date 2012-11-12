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
 * Default implementation of ContainerAwareInterface.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
abstract class ContainerAware implements ContainerAwareInterface
{
    /**
     * @var Pimple
     */
    protected $container;

    /**
     * {@inheritdoc}
     */
    public function setContainer(Pimple $container)
    {
        $this->container = $container;
    }
}
