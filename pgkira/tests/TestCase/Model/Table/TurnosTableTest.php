<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TurnosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TurnosTable Test Case
 */
class TurnosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TurnosTable
     */
    public $Turnos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.turnos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Turnos') ? [] : ['className' => 'App\Model\Table\TurnosTable'];
        $this->Turnos = TableRegistry::get('Turnos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Turnos);

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
