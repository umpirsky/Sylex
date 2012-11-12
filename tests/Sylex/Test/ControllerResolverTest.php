<?php

/**
 * This file is part of Sylex project.
 *
 *  (c) Саша Стаменковић <umpirsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylex\Test;

use Sylex\Application;
use Sylex\ControllerResolver;
use Symfony\Component\HttpFoundation\Request;

/**
 * ControllerResolver tests.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
class ControllerResolverTest extends \PHPUnit_Framework_TestCase
{
    public function testGetController()
    {
        $app = new Application();
        $resolver = new ControllerResolver($app);

        $request = Request::create('/');
        $this->assertFalse($resolver->getController($request));

        $request->attributes->set('_controller', 'Sylex\Test\Fixture\Controller\SylexController::echoAction');
        $controller = $resolver->getController($request);
        $this->assertInstanceOf('Sylex\Test\Fixture\Controller\SylexController', $controller[0]);
        $this->assertSame('echoAction', $controller[1]);
    }
}