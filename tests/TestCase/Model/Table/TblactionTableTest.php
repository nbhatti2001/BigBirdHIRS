<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblactionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblactionTable Test Case
 */
class TblactionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblactionTable
     */
    public $Tblaction;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tblaction',
        'app.users',
        'app.departments',
        'app.companies',
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
        'app.user_log'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tblaction') ? [] : ['className' => 'App\Model\Table\TblactionTable'];
        $this->Tblaction = TableRegistry::get('Tblaction', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tblaction);

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
