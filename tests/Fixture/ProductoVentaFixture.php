<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductoVentaFixture
 */
class ProductoVentaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'producto_venta';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'productos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ventas_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_productos_has_venta_venta1_idx' => ['type' => 'index', 'columns' => ['ventas_id'], 'length' => []],
            'fk_productos_has_venta_productos1_idx' => ['type' => 'index', 'columns' => ['productos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['productos_id', 'ventas_id'], 'length' => []],
            'fk_productos_has_venta_productos1' => ['type' => 'foreign', 'columns' => ['productos_id'], 'references' => ['productos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_productos_has_venta_venta1' => ['type' => 'foreign', 'columns' => ['ventas_id'], 'references' => ['ventas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'productos_id' => 1,
                'ventas_id' => 1
            ],
        ];
        parent::init();
    }
}
