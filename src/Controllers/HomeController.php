<?php namespace ShippingSteam\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\Twig;

/**
 * Class HomeController
 *
 * Home page of the website
 *
 * @package ShippingSteam\Controllers
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
        // example how to return json
//        $response = $origResponse->withHeader('Content-type', 'application/json');
//        $response->getBody()->write(json_encode(['data' => 'isJson']));
//        return $response;

        // how to return twig view
        return $this->view->render($response, 'home.html', [
            'name' => 'Jason Michels'
        ]);
    }
}
