<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeesTable Test Case
 */
class EmployeesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeesTable
     */
    public $Employees;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.employees',
        'app.stations',
        'app.managers',
        'app.companies',
        'app.departments',
        'app.salary_masters',
        'app.designations',
        'app.banks',
        'app.users',
        'app.group_details',
        'app.groups',
        'app.payscales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Employees') ? [] : ['className' => 'App\Model\Table\EmployeesTable'];
        $this->Employees = TableRegistry::get('Employees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Employees);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test checkCustomerExists method
     *
     * @return void
     */
    public function testCheckCustomerExists()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test notEmptyCheck method
     *
     * @return void
     */
    public function testNotEmptyCheck()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test notEmptyCheckPaySc method
     *
     * @return void
     */
    public function testNotEmptyCheckPaySc()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test notEmptyCheckDsgId method
     *
     * @return void
     */
    public function testNotEmptyCheckDsgId()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test notEmptyCheckBPay method
     *
     * @return void
     */
    public function testNotEmptyCheckBPay()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test notEmptyCheckSPName method
     *
     * @return void
     */
    public function testNotEmptyCheckSPName()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test notEmptyCheckECNumber method
     *
     * @return void
     */
    public function testNotEmptyCheckECNumber()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test notEmptyCheckCName method
     *
     * @return void
     */
    public function testNotEmptyCheckCName()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test notEmptyCheckCNumber method
     *
     * @return void
     */
    public function testNotEmptyCheckCNumber()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test notEmptyCheckRNumber method
     *
     * @return void
     */
    public function testNotEmptyCheckRNumber()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test notEmptyCheckMNumber method
     *
     * @return void
     */
    public function testNotEmptyCheckMNumber()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
