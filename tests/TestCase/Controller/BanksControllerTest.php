<?php
namespace App\Test\TestCase\Controller;

use App\Controller\BanksController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\BanksController Test Case
 */
class BanksControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.banks',
        'app.companies',
        'app.users',
        'app.departments',
        'app.my_users',
        'app.stations',
        'app.managers',
        'app.user_roles',
        'app.menus',
        'app.roles',
        'app.employees',
        'app.designations',
        'app.employees_bkp',
        'app.salary_masters',
        'app.payscales',
        'app.qualifications',
        'app.experiences',
        'app.user_log',
        'app.modified_by',
        'app.users_bkp'
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
