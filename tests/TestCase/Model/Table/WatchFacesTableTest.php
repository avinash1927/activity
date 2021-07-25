<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WatchFacesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WatchFacesTable Test Case
 */
class WatchFacesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WatchFacesTable
     */
    protected $WatchFaces;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.WatchFaces',
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
        $config = $this->getTableLocator()->exists('WatchFaces') ? [] : ['className' => WatchFacesTable::class];
        $this->WatchFaces = $this->getTableLocator()->get('WatchFaces', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->WatchFaces);

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
