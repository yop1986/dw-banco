<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClTrestadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClTrestadosTable Test Case
 */
class ClTrestadosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClTrestadosTable
     */
    public $ClTrestados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cl_trestados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ClTrestados') ? [] : ['className' => ClTrestadosTable::class];
        $this->ClTrestados = TableRegistry::get('ClTrestados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClTrestados);

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
