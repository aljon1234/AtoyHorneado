<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProveedorPedidoproveedor Entity
 *
 * @property int $proveedores_idproveedores
 * @property int $pedido_proveedor_idpedido_proveedor
 */
class ProveedorPedidoproveedor extends Entity
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
        '*' => true,
        'proveedores_idproveedores' => false,
        'pedido_proveedor_idpedido_proveedor' => false
    ];
}
