<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipousersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipousersTable Test Case
 */
class TipousersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipousersTable
     */
    public $Tipousers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tipousers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tipousers') ? [] : ['className' => TipousersTable::class];
        $this->Tipousers = TableRegistry::getTableLocator()->get('Tipousers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tipousers);

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
