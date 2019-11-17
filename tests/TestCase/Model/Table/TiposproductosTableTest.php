<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposproductosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposproductosTable Test Case
 */
class TiposproductosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposproductosTable
     */
    public $Tiposproductos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tiposproductos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tiposproductos') ? [] : ['className' => TiposproductosTable::class];
        $this->Tiposproductos = TableRegistry::getTableLocator()->get('Tiposproductos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tiposproductos);

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
