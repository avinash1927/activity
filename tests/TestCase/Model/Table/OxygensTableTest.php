<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OxygensTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OxygensTable Test Case
 */
class OxygensTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OxygensTable
     */
    protected $Oxygens;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Oxygens',
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
        $config = $this->getTableLocator()->exists('Oxygens') ? [] : ['className' => OxygensTable::class];
        $this->Oxygens = $this->getTableLocator()->get('Oxygens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Oxygens);

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
