<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductoVentum Entity
 *
 * @property int $productos_id
 * @property int $ventas_id
 *
 * @property \App\Model\Entity\Producto $producto
 * @property \App\Model\Entity\Venta $venta
 */
class ProductoVentum extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'producto' => true,
        'venta' => true
    ];
}
