<?php namespace ShippingSteam\LandingPadUI\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\Twig;

/**
 * Class HomeController
 *
 * Home page of the website
 *
 * @package ShippingSteam\LandingPadUI\Controllers
 * @author Jason Michels
 * @version $Id$
 */
class HomeController
{
    /**
     * @var Twig
     */
    protected $view;

    public function __construct(Twig $view)
    {
        $this->view = $view;
    }

    /**
     * Homepage
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param $args
     * @return ResponseInterface
     */
    public function index(ServerRequestInterface $request, ResponseInterface $response, $args = [])
    {
        return $this->view->render($response, 'home.html', [
            'name' => 'Jason Michels'
        ]);
    }
}
