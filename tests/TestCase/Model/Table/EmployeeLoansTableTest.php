<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeeloansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeeloansTable Test Case
 */
class EmployeeloansTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeeloansTable
     */
    public $Employeeloans;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.employeeloans',
        'app.employees',
        'app.stations',
        'app.managers',
        'app.departments',
        'app.companies',
        'app.users',
        'app.user_roles',
        'app.menus',
        'app.roles',
        'app.user_log',
        'app.designations',
        'app.employees_bkp',
        'app.salary_masters',
        'app.banks',
        'app.my_users',
        'app.modified_by',
        'app.users_bkp',
        'app.payscales',
        'app.qualifications',
        'app.experiences'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Employeeloans') ? [] : ['className' => 'App\Model\Table\EmployeeloansTable'];
        $this->Employeeloans = TableRegistry::get('Employeeloans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Employeeloans);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
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
