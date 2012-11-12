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

use Silex\Application as BaseApplication;

/**
 * Sylex application.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
class Application extends BaseApplication
{
    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct();

        $this->register(new ServiceProvider());
    }
}
