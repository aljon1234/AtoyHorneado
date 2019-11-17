<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProveedorPedidoproveedorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProveedorPedidoproveedorTable Test Case
 */
class ProveedorPedidoproveedorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProveedorPedidoproveedorTable
     */
    public $ProveedorPedidoproveedor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProveedorPedidoproveedor'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProveedorPedidoproveedor') ? [] : ['className' => ProveedorPedidoproveedorTable::class];
        $this->ProveedorPedidoproveedor = TableRegistry::getTableLocator()->get('ProveedorPedidoproveedor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProveedorPedidoproveedor);

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
