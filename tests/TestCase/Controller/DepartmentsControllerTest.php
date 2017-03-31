<?php
namespace App\Test\TestCase\Controller;

use App\Controller\DepartmentsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\DepartmentsController Test Case
 */
class DepartmentsControllerTest extends IntegrationTestCase
{

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
        'app.users_bkp',
        'app.users1'
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
