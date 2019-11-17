<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $nombre_usuario
 * @property string|null $apellido_usuario
 * @property string|null $dni_usuario
 * @property string|null $direccion_usuario
 * @property int $tipousers_id
 *
 * @property \App\Model\Entity\Tipouser $tipouser
 */
class User extends Entity
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
        'nombre_usuario' => true,
        'apellido_usuario' => true,
        'dni_usuario' => true,
        'direccion_usuario' => true,
        'tipousers_id' => true,
        'tipouser' => true
    ];
}
