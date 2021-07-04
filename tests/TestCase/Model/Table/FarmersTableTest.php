<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FarmersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FarmersTable Test Case
 */
class FarmersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FarmersTable
     */
    protected $Farmers;

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
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Farmers') ? [] : ['className' => FarmersTable::class];
        $this->Farmers = $this->getTableLocator()->get('Farmers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Farmers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
