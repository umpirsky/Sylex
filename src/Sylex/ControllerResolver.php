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

use Silex\ControllerResolver as BaseControllerResolver;

/**
 * Injects container into controllers.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
class ControllerResolver extends BaseControllerResolver
{
    /**
     * {@inheritdoc}
     */
    protected function createController($controller)
    {
        $callable = parent::createController($controller);

        if ($callable[0] instanceof ContainerAwareInterface) {
            $callable[0]->setContainer($this->app);
        }

        return $callable;
    }
}
