<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vehiculos Model
 *
 * @property \App\Model\Table\TiposvehiculosTable&\Cake\ORM\Association\BelongsTo $Tiposvehiculos
 *
 * @method \App\Model\Entity\Vehiculo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vehiculo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vehiculo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vehiculo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vehiculo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vehiculo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vehiculo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vehiculo findOrCreate($search, callable $callback = null, $options = [])
 */
class VehiculosTable extends Table
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

        $this->setTable('vehiculos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tiposvehiculos', [
            'foreignKey' => 'tipovehiculos_id',
            'joinType' => 'INNER'
        ]);
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
            ->scalar('nombre_vehiculo')
            ->maxLength('nombre_vehiculo', 45)
            ->allowEmptyString('nombre_vehiculo');

        $validator
            ->scalar('año_vehiculo')
            ->maxLength('año_vehiculo', 45)
            ->allowEmptyString('año_vehiculo');

        $validator
            ->scalar('placa_vehiculo')
            ->maxLength('placa_vehiculo', 45)
            ->allowEmptyString('placa_vehiculo');

        $validator
            ->scalar('marca_vehiculo')
            ->maxLength('marca_vehiculo', 45)
            ->allowEmptyString('marca_vehiculo');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['tipovehiculos_id'], 'Tiposvehiculos'));

        return $rules;
    }
}
