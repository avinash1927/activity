<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserTrainingTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserTrainingTable Test Case
 */
class UserTrainingTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserTrainingTable
     */
    protected $UserTraining;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.UserTraining',
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
        $config = $this->getTableLocator()->exists('UserTraining') ? [] : ['className' => UserTrainingTable::class];
        $this->UserTraining = $this->getTableLocator()->get('UserTraining', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->UserTraining);

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
