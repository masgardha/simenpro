<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StoresTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StoresTable Test Case
 */
class StoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StoresTable
     */
    protected $Stores;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Stores',
        'app.Users',
        'app.Inputs',
        'app.Outputs',
        'app.Stocks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Stores') ? [] : ['className' => StoresTable::class];
        $this->Stores = $this->getTableLocator()->get('Stores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Stores);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StoresTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\StoresTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
