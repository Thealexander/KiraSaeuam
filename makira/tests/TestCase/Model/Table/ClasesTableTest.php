<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClasesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClasesTable Test Case
 */
class ClasesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClasesTable
     */
    public $Clases;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.clases'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Clases') ? [] : ['className' => 'App\Model\Table\ClasesTable'];
        $this->Clases = TableRegistry::get('Clases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Clases);

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
