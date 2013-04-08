<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // hetic_search_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hetic_search_homepage');
            }

            return array (  '_controller' => 'Hetic\\SearchBundle\\Controller\\DefaultController::indexAction',  '_route' => 'hetic_search_homepage',);
        }

        // hetic_search_view
        if (0 === strpos($pathinfo, '/film') && preg_match('#^/film/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_search_view')), array (  '_controller' => 'Hetic\\SearchBundle\\Controller\\DefaultController::seeAction',));
        }

        // hetic_search_result
        if ($pathinfo === '/result') {
            return array (  '_controller' => 'Hetic\\SearchBundle\\Controller\\DefaultController::resultAction',  '_route' => 'hetic_search_result',);
        }

        // hetic_search_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Hetic\\SearchBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'hetic_search_about',);
        }

        // hetic_search_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Hetic\\SearchBundle\\Controller\\DefaultController::contactAction',  '_route' => 'hetic_search_contact',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
