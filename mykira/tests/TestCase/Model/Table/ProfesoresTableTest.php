<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfesoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfesoresTable Test Case
 */
class ProfesoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfesoresTable
     */
    public $Profesores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.profesores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Profesores') ? [] : ['className' => 'App\Model\Table\ProfesoresTable'];
        $this->Profesores = TableRegistry::get('Profesores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Profesores);

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
