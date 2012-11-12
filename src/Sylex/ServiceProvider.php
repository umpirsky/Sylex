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

use Silex\Application as SilexApplication;
use Silex\ServiceProviderInterface;

/**
 * Provides Sylex controller resolver.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function register(SilexApplication $app)
    {
        $app['resolver'] = $app->share(function () use ($app) {
            return new ControllerResolver($app, $app['logger']);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(SilexApplication $app)
    {
    }
}
