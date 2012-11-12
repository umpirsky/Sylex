<?php

/**
 * This file is part of Sylex project.
 *
 *  (c) Саша Стаменковић <umpirsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylex\Test\Fixture\Controller;

class SilexController
{
    public function echoAction($echo)
    {
        return $echo;
    }
}
