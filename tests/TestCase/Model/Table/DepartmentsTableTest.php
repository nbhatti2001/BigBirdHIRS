<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DepartmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DepartmentsTable Test Case
 */
class DepartmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DepartmentsTable
     */
    public $Departments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.departments',
        'app.companies',
        'app.users',
        'app.stations',
        'app.managers',
        'app.salary_masters',
        'app.employees',
        'app.banks',
        'app.designations',
        'app.payscales',
        'app.qualifications',
        'app.experiences',
        'app.user_roles',
        'app.menus',
        'app.roles',
        'app.user_log',
        'app.employees_bkp',
        'app.users_bkp'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Departments') ? [] : ['className' => 'App\Model\Table\DepartmentsTable'];
        $this->Departments = TableRegistry::get('Departments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Departments);

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
