<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BanksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BanksTable Test Case
 */
class BanksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BanksTable
     */
    public $Banks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.banks',
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
        'app.users_bkp',
        'app.my_users',
        'app.modified_by',
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
        $config = TableRegistry::exists('Banks') ? [] : ['className' => 'App\Model\Table\BanksTable'];
        $this->Banks = TableRegistry::get('Banks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Banks);

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
}
