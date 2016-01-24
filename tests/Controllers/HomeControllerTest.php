<?php namespace ShippingSteam\LandingPadUI\Tests\Controllers;

use ShippingSteam\LandingPadUI\Controllers\HomeController;
use ShippingSteam\LandingPadUI\Tests\TestCase;
use Slim\Views\Twig;
use \Mockery as mockery;

/**
 * Class HomeControllerTest
 *
 * Tests for home controler
 *
 * @package ShippingSteam\LandingPadUI\Tests\Controllers
 * @author Jason Michels
 * @version $Id$
 */
class HomeControllerTest extends TestCase
{
    /**
     * Test home controller has correct contracts
     */
    public function testHomeControllerHasCorrectContracts()
    {
        $twig = mockery::mock(Twig::class);

        $home = new HomeController($twig);
        $this->assertInstanceOf(HomeController::class, $home);
    }
}
