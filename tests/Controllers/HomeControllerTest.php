<?php namespace ShippingSteam\Tests\Controllers;

use ShippingSteam\Controllers\HomeController;
use ShippingSteam\Tests\TestCase;
use \Mockery as mockery;

/**
 * Class HomeControllerTest
 *
 * Tests for home controler
 *
 * @package ShippingSteam\Tests\Controllers
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
        $home = new HomeController();
        $this->assertInstanceOf(HomeController::class, $home);
    }

    /**
     * Test home page method returns correct data
     */
    public function testHomePageLoadsCorrectly()
    {
        $home = new HomeController();
        $this->assertStringMatchesFormat('This is the home page', $home->index());
    }
}
