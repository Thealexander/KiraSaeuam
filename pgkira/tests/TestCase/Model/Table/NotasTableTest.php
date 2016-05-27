<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotasTable Test Case
 */
class NotasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NotasTable
     */
    public $Notas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.notas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Notas') ? [] : ['className' => 'App\Model\Table\NotasTable'];
        $this->Notas = TableRegistry::get('Notas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Notas);

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
