<?php
namespace App\Test\TestCase\Form;

use App\Form\StationsForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\StationsForm Test Case
 */
class StationsFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\StationsForm
     */
    public $Stations;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Stations = new StationsForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Stations);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
