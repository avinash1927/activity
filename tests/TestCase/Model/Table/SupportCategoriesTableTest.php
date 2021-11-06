<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SupportCategoriesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SupportCategoriesTable Test Case
 */
class SupportCategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SupportCategoriesTable
     */
    protected $SupportCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.SupportCategories',
        'app.Supports',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SupportCategories') ? [] : ['className' => SupportCategoriesTable::class];
        $this->SupportCategories = $this->getTableLocator()->get('SupportCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->SupportCategories);

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
