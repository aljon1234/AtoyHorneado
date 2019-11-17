<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vehiculo Entity
 *
 * @property int $id
 * @property string|null $nombre_vehiculo
 * @property string|null $año_vehiculo
 * @property string|null $placa_vehiculo
 * @property string|null $marca_vehiculo
 * @property int $tipovehiculos_id
 *
 * @property \App\Model\Entity\Tiposvehiculo $tiposvehiculo
 */
class Vehiculo extends Entity
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
        'nombre_vehiculo' => true,
        'año_vehiculo' => true,
        'placa_vehiculo' => true,
        'marca_vehiculo' => true,
        'tipovehiculos_id' => true,
        'tiposvehiculo' => true
    ];
}
