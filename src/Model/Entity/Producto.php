<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id
 * @property string|null $nombre_producto
 * @property string|null $stock_producto
 * @property int $proveedors_id
 * @property int $tipoproductos_id
 *
 * @property \App\Model\Entity\Proveedor $proveedor
 * @property \App\Model\Entity\Tiposproducto $tiposproducto
 */
class Producto extends Entity
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
        'nombre_producto' => true,
        'stock_producto' => true,
        'proveedors_id' => true,
        'tipoproductos_id' => true,
        'proveedor' => true,
        'tiposproducto' => true
    ];
}
