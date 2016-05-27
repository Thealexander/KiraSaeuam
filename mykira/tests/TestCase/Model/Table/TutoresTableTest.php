<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TutoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TutoresTable Test Case
 */
class TutoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TutoresTable
     */
    public $Tutores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tutores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tutores') ? [] : ['className' => 'App\Model\Table\TutoresTable'];
        $this->Tutores = TableRegistry::get('Tutores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tutores);

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
