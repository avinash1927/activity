<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TargetsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TargetsTable Test Case
 */
class TargetsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TargetsTable
     */
    protected $Targets;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Targets',
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
        $config = $this->getTableLocator()->exists('Targets') ? [] : ['className' => TargetsTable::class];
        $this->Targets = $this->getTableLocator()->get('Targets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Targets);

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
