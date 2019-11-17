<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tiposvehiculos Model
 *
 * @method \App\Model\Entity\Tiposvehiculo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tiposvehiculo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tiposvehiculo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tiposvehiculo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tiposvehiculo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tiposvehiculo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tiposvehiculo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tiposvehiculo findOrCreate($search, callable $callback = null, $options = [])
 */
class TiposvehiculosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tiposvehiculos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nombreTipoVehiculo')
            ->maxLength('nombreTipoVehiculo', 45)
            ->allowEmptyString('nombreTipoVehiculo');

        return $validator;
    }
}
