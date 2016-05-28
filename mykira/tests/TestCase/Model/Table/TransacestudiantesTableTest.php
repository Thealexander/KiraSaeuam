<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransacestudiantesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransacestudiantesTable Test Case
 */
class TransacestudiantesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TransacestudiantesTable
     */
    public $Transacestudiantes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.transacestudiantes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Transacestudiantes') ? [] : ['className' => 'App\Model\Table\TransacestudiantesTable'];
        $this->Transacestudiantes = TableRegistry::get('Transacestudiantes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Transacestudiantes);

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
