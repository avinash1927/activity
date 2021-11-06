<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SupportsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SupportsTable Test Case
 */
class SupportsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SupportsTable
     */
    protected $Supports;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Supports',
        'app.SupportCategories',
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
        $config = $this->getTableLocator()->exists('Supports') ? [] : ['className' => SupportsTable::class];
        $this->Supports = $this->getTableLocator()->get('Supports', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Supports);

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
