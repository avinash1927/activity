<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\FarmersController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\FarmersController Test Case
 *
 * @uses \App\Controller\FarmersController
 */
class FarmersControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Farmers',
        'app.Users',
        'app.ApplicationFlows',
        'app.CropOrder',
        'app.CropOrderReceived',
        'app.FarmerPlots',
        'app.FarmerRecommendeds',
        'app.FarmerVegitables',
        'app.Harvest',
        'app.PlotLocations',
        'app.VwVegSaleReports',
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
