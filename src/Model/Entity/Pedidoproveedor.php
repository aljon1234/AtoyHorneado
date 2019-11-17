<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pedidoproveedor Entity
 *
 * @property int $id
 * @property string|null $id_proveedor
 * @property string|null $pedido_proveedorcol
 */
class Pedidoproveedor extends Entity
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
        'id_proveedor' => true,
        'pedido_proveedorcol' => true
    ];
}
