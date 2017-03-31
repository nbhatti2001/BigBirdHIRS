<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExperiencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExperiencesTable Test Case
 */
class ExperiencesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExperiencesTable
     */
    public $Experiences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.experiences',
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
        'app.payscales',
        'app.qualifications'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Experiences') ? [] : ['className' => 'App\Model\Table\ExperiencesTable'];
        $this->Experiences = TableRegistry::get('Experiences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Experiences);

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
