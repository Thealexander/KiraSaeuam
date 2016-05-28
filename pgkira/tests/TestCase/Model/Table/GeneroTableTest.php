<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeneroTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeneroTable Test Case
 */
class GeneroTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeneroTable
     */
    public $Genero;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.genero'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Genero') ? [] : ['className' => 'App\Model\Table\GeneroTable'];
        $this->Genero = TableRegistry::get('Genero', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Genero);

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
