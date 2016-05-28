<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersonalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersonalTable Test Case
 */
class PersonalTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PersonalTable
     */
    public $Personal;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.personal'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Personal') ? [] : ['className' => 'App\Model\Table\PersonalTable'];
        $this->Personal = TableRegistry::get('Personal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Personal);

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
