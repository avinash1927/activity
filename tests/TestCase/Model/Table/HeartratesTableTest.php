<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HeartratesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HeartratesTable Test Case
 */
class HeartratesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HeartratesTable
     */
    protected $Heartrates;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Heartrates',
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
        $config = $this->getTableLocator()->exists('Heartrates') ? [] : ['className' => HeartratesTable::class];
        $this->Heartrates = $this->getTableLocator()->get('Heartrates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Heartrates);

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
