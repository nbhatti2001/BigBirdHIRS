<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QualificationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QualificationsTable Test Case
 */
class QualificationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QualificationsTable
     */
    public $Qualifications;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.qualifications',
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
        $config = TableRegistry::exists('Qualifications') ? [] : ['className' => 'App\Model\Table\QualificationsTable'];
        $this->Qualifications = TableRegistry::get('Qualifications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Qualifications);

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
