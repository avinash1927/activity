<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WeatherHistoriesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WeatherHistoriesTable Test Case
 */
class WeatherHistoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WeatherHistoriesTable
     */
    protected $WeatherHistories;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.WeatherHistories',
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
        $config = $this->getTableLocator()->exists('WeatherHistories') ? [] : ['className' => WeatherHistoriesTable::class];
        $this->WeatherHistories = $this->getTableLocator()->get('WeatherHistories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->WeatherHistories);

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
