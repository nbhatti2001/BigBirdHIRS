<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalaryMastersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalaryMastersTable Test Case
 */
class SalaryMastersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SalaryMastersTable
     */
    public $SalaryMasters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.salary_masters',
        'app.employees',
        'app.banks',
        'app.designations',
        'app.payscales',
        'app.stations',
        'app.departments',
        'app.companies',
        'app.users',
        'app.group_details',
        'app.groups'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SalaryMasters') ? [] : ['className' => 'App\Model\Table\SalaryMastersTable'];
        $this->SalaryMasters = TableRegistry::get('SalaryMasters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SalaryMasters);

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
