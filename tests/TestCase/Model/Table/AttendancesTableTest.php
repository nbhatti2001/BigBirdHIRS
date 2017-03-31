<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AttendancesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AttendancesTable Test Case
 */
class AttendancesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AttendancesTable
     */
    public $Attendances;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.attendances',
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
        $config = TableRegistry::exists('Attendances') ? [] : ['className' => 'App\Model\Table\AttendancesTable'];
        $this->Attendances = TableRegistry::get('Attendances', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Attendances);

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
