<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProveedorPedidoproveedorFixture
 */
class ProveedorPedidoproveedorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'proveedor_pedidoproveedor';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'proveedores_idproveedores' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pedido_proveedor_idpedido_proveedor' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_proveedores_has_pedido_proveedor_pedido_proveedor1_idx' => ['type' => 'index', 'columns' => ['pedido_proveedor_idpedido_proveedor'], 'length' => []],
            'fk_proveedores_has_pedido_proveedor_proveedores1_idx' => ['type' => 'index', 'columns' => ['proveedores_idproveedores'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['proveedores_idproveedores', 'pedido_proveedor_idpedido_proveedor'], 'length' => []],
            'fk_proveedores_has_pedido_proveedor_pedido_proveedor1' => ['type' => 'foreign', 'columns' => ['pedido_proveedor_idpedido_proveedor'], 'references' => ['pedidoproveedors', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_proveedores_has_pedido_proveedor_proveedores1' => ['type' => 'foreign', 'columns' => ['proveedores_idproveedores'], 'references' => ['proveedors', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'proveedores_idproveedores' => 1,
                'pedido_proveedor_idpedido_proveedor' => 1
            ],
        ];
        parent::init();
    }
}
