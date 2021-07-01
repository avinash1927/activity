<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WardTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WardTable Test Case
 */
class WardTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WardTable
     */
    protected $Ward;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Ward',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ward') ? [] : ['className' => WardTable::class];
        $this->Ward = $this->getTableLocator()->get('Ward', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Ward);

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
}
