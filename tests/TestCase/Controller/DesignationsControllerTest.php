<?php
namespace App\Test\TestCase\Controller;

use App\Controller\DesignationsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\DesignationsController Test Case
 */
class DesignationsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.designations',
        'app.employees',
        'app.stations',
        'app.managers',
        'app.companies',
        'app.users',
        'app.departments',
        'app.users1',
        'app.user_roles',
        'app.menus',
        'app.roles',
        'app.user_log',
        'app.employees_bkp',
        'app.salary_masters',
        'app.banks',
        'app.users_bkp',
        'app.payscales',
        'app.qualifications',
        'app.experiences'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
