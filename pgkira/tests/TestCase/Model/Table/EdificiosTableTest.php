<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EdificiosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EdificiosTable Test Case
 */
class EdificiosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EdificiosTable
     */
    public $Edificios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.edificios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Edificios') ? [] : ['className' => 'App\Model\Table\EdificiosTable'];
        $this->Edificios = TableRegistry::get('Edificios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Edificios);

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
