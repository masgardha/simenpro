<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InputsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InputsTable Test Case
 */
class InputsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InputsTable
     */
    protected $Inputs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Inputs',
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
        $config = $this->getTableLocator()->exists('Inputs') ? [] : ['className' => InputsTable::class];
        $this->Inputs = $this->getTableLocator()->get('Inputs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Inputs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InputsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\InputsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
