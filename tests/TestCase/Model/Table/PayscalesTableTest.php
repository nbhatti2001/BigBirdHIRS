<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PayscalesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PayscalesTable Test Case
 */
class PayscalesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PayscalesTable
     */
    public $Payscales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.payscales',
        'app.employees',
        'app.banks',
        'app.salary_masters',
        'app.designations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Payscales') ? [] : ['className' => 'App\Model\Table\PayscalesTable'];
        $this->Payscales = TableRegistry::get('Payscales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Payscales);

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
