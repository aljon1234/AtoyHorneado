<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposvehiculosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposvehiculosTable Test Case
 */
class TiposvehiculosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposvehiculosTable
     */
    public $Tiposvehiculos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tiposvehiculos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tiposvehiculos') ? [] : ['className' => TiposvehiculosTable::class];
        $this->Tiposvehiculos = TableRegistry::getTableLocator()->get('Tiposvehiculos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tiposvehiculos);

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
