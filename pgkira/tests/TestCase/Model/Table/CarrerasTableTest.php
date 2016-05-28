<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarrerasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarrerasTable Test Case
 */
class CarrerasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CarrerasTable
     */
    public $Carreras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.carreras'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Carreras') ? [] : ['className' => 'App\Model\Table\CarrerasTable'];
        $this->Carreras = TableRegistry::get('Carreras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Carreras);

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
