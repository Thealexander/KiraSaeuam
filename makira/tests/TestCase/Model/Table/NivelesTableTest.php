<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NivelesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NivelesTable Test Case
 */
class NivelesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NivelesTable
     */
    public $Niveles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.niveles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Niveles') ? [] : ['className' => 'App\Model\Table\NivelesTable'];
        $this->Niveles = TableRegistry::get('Niveles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Niveles);

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
