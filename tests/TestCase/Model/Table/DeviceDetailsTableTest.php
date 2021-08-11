<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeviceDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeviceDetailsTable Test Case
 */
class DeviceDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DeviceDetailsTable
     */
    protected $DeviceDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.DeviceDetails',
        'app.Watches',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DeviceDetails') ? [] : ['className' => DeviceDetailsTable::class];
        $this->DeviceDetails = $this->getTableLocator()->get('DeviceDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->DeviceDetails);

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
