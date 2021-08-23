<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SleepsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SleepsTable Test Case
 */
class SleepsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SleepsTable
     */
    protected $Sleeps;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Sleeps',
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
        $config = $this->getTableLocator()->exists('Sleeps') ? [] : ['className' => SleepsTable::class];
        $this->Sleeps = $this->getTableLocator()->get('Sleeps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Sleeps);

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
