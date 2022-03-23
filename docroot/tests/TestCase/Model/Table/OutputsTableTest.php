<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OutputsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OutputsTable Test Case
 */
class OutputsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OutputsTable
     */
    protected $Outputs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Outputs',
        'app.Stores',
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
        $config = $this->getTableLocator()->exists('Outputs') ? [] : ['className' => OutputsTable::class];
        $this->Outputs = $this->getTableLocator()->get('Outputs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Outputs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OutputsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\OutputsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
