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

use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Sylex controller implementation.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
abstract class Controller extends ContainerAware
{
    /**
     * Generates a URL from the given parameters.
     *
     * @param string  $route      name of the route
     * @param mixed   $parameters array of parameters
     * @param Boolean $absolute   whether to generate an absolute URL
     *
     * @return string generated URL
     */
    public function generateUrl($route, $parameters = array(), $absolute = false)
    {
        return $this->get('url_generator')->generate($route, $parameters, $absolute);
    }

    /**
     * Returns a RedirectResponse to the given URL.
     *
     * @param string  $url    URL to redirect to
     * @param integer $status status code to use for the Response
     *
     * @return RedirectResponse
     */
    public function redirect($url, $status = 302)
    {
        return new RedirectResponse($url, $status);
    }

    /**
     * Returns a rendered view.
     *
     * @param string $view       the view name
     * @param array  $parameters an array of parameters to pass to the view
     *
     * @return string the renderer view
     */
    protected function render($view, array $parameters = array())
    {
        return $this->get('twig')->render($view, $parameters);
    }

    /**
     * Returns true if the service id is defined.
     *
     * @param string $id the service id
     *
     * @return bool true if the service id is defined, false otherwise
     */
    public function has($id)
    {
        return $this->container->offsetExists($id);
    }

    /**
     * Gets a service by id.
     *
     * @param string $id the service id
     *
     * @return object the service
     */
    protected function get($id)
    {
        return $this->container[$id];
    }
}
