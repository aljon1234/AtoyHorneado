<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @property \App\Model\Table\VehiculosTable&\Cake\ORM\Association\BelongsTo $Vehiculos
 *
 * @method \App\Model\Entity\Cliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cliente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente findOrCreate($search, callable $callback = null, $options = [])
 */
class ClientesTable extends Table
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

        $this->setTable('clientes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Vehiculos', [
            'foreignKey' => 'vehiculos_id',
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
            ->scalar('Nombre_cliente')
            ->maxLength('Nombre_cliente', 45)
            ->allowEmptyString('Nombre_cliente');

        $validator
            ->scalar('Apellido_cliente')
            ->maxLength('Apellido_cliente', 45)
            ->allowEmptyString('Apellido_cliente');

        $validator
            ->scalar('dni_cliente')
            ->maxLength('dni_cliente', 45)
            ->allowEmptyString('dni_cliente');

        $validator
            ->scalar('telef_cliente')
            ->maxLength('telef_cliente', 45)
            ->allowEmptyString('telef_cliente');

        $validator
            ->scalar('direccion_cliente')
            ->maxLength('direccion_cliente', 45)
            ->allowEmptyString('direccion_cliente');

        $validator
            ->scalar('clientescol')
            ->maxLength('clientescol', 45)
            ->allowEmptyString('clientescol');

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
        $rules->add($rules->existsIn(['vehiculos_id'], 'Vehiculos'));

        return $rules;
    }
}
