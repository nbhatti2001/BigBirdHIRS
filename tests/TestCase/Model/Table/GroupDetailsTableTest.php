<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GroupDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GroupDetailsTable Test Case
 */
class GroupDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GroupDetailsTable
     */
    public $GroupDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.group_details',
        'app.groups',
        'app.users',
        'app.departments',
        'app.companies',
        'app.stations',
        'app.salary_masters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GroupDetails') ? [] : ['className' => 'App\Model\Table\GroupDetailsTable'];
        $this->GroupDetails = TableRegistry::get('GroupDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GroupDetails);

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
