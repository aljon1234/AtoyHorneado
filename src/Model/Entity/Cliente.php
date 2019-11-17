<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string|null $Nombre_cliente
 * @property string|null $Apellido_cliente
 * @property string|null $dni_cliente
 * @property string|null $telef_cliente
 * @property string|null $direccion_cliente
 * @property string|null $clientescol
 * @property int $vehiculos_id
 *
 * @property \App\Model\Entity\Vehiculo $vehiculo
 */
class Cliente extends Entity
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
        'Nombre_cliente' => true,
        'Apellido_cliente' => true,
        'dni_cliente' => true,
        'telef_cliente' => true,
        'direccion_cliente' => true,
        'clientescol' => true,
        'vehiculos_id' => true,
        'vehiculo' => true
    ];
}
