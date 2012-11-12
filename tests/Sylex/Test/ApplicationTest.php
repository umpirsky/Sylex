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
use Symfony\Component\HttpFoundation\Request;

/**
 * Application tests.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
class ApplicationTest extends \PHPUnit_Framework_TestCase
{
    public function testSilexController()
    {
        $app = new Application();
        $echo = 'Hello world!';

        $app->get('/silex/echo/{echo}', 'Sylex\Test\Fixture\Controller\SilexController::echoAction');
        $this->assertEquals($echo, $app->handle(Request::create('/silex/echo/'.$echo))->getContent());

        $app->get('/callback/{echo}', function($echo) {
            return $echo;
        });
        $this->assertEquals($echo, $app->handle(Request::create('/callback/'.$echo))->getContent());
    }

    public function testSylexController()
    {
        $app = new Application();

        $app->get('/sylex/echo/{echo}', 'Sylex\Test\Fixture\Controller\SylexController::echoAction');

        $echo = 'Hello world!';

        $this->assertEquals($echo, $app->handle(Request::create('/sylex/echo/'.$echo))->getContent());
    }
}
