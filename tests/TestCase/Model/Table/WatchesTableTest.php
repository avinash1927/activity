<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WatchesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WatchesTable Test Case
 */
class WatchesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WatchesTable
     */
    protected $Watches;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
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
        $config = $this->getTableLocator()->exists('Watches') ? [] : ['className' => WatchesTable::class];
        $this->Watches = $this->getTableLocator()->get('Watches', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Watches);

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
