<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductosFixture
 */
class ProductosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre_producto' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'stock_producto' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'proveedors_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipoproductos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_productos_proveedores1_idx' => ['type' => 'index', 'columns' => ['proveedors_id'], 'length' => []],
            'fk_productos_tipo_producto1_idx' => ['type' => 'index', 'columns' => ['tipoproductos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_productos_proveedores1' => ['type' => 'foreign', 'columns' => ['proveedors_id'], 'references' => ['proveedors', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_productos_tipo_producto1' => ['type' => 'foreign', 'columns' => ['tipoproductos_id'], 'references' => ['tiposproductos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'id' => 1,
                'nombre_producto' => 'Lorem ipsum dolor sit amet',
                'stock_producto' => 'Lorem ipsum dolor sit amet',
                'proveedors_id' => 1,
                'tipoproductos_id' => 1
            ],
        ];
        parent::init();
    }
}
