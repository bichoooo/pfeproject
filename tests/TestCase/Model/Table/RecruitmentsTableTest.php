<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecruitmentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecruitmentsTable Test Case
 */
class RecruitmentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RecruitmentsTable
     */
    protected $Recruitments;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Recruitments',
        'app.Jobs',
        'app.Departments',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Recruitments') ? [] : ['className' => RecruitmentsTable::class];
        $this->Recruitments = $this->getTableLocator()->get('Recruitments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Recruitments);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RecruitmentsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RecruitmentsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
