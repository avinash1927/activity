<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BloodPressureTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BloodPressureTable Test Case
 */
class BloodPressureTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BloodPressureTable
     */
    protected $BloodPressure;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.BloodPressure',
        'app.Watches',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BloodPressure') ? [] : ['className' => BloodPressureTable::class];
        $this->BloodPressure = $this->getTableLocator()->get('BloodPressure', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->BloodPressure);

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
