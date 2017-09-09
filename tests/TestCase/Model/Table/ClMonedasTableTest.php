<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClMonedasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClMonedasTable Test Case
 */
class ClMonedasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClMonedasTable
     */
    public $ClMonedas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cl_monedas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ClMonedas') ? [] : ['className' => ClMonedasTable::class];
        $this->ClMonedas = TableRegistry::get('ClMonedas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClMonedas);

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
