<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PedidoproveedorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PedidoproveedorsTable Test Case
 */
class PedidoproveedorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PedidoproveedorsTable
     */
    public $Pedidoproveedors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Pedidoproveedors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pedidoproveedors') ? [] : ['className' => PedidoproveedorsTable::class];
        $this->Pedidoproveedors = TableRegistry::getTableLocator()->get('Pedidoproveedors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pedidoproveedors);

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
