<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tiposproductos Model
 *
 * @method \App\Model\Entity\Tiposproducto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tiposproducto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tiposproducto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tiposproducto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tiposproducto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tiposproducto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tiposproducto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tiposproducto findOrCreate($search, callable $callback = null, $options = [])
 */
class TiposproductosTable extends Table
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

        $this->setTable('tiposproductos');
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
            ->scalar('nombreTipo_producto')
            ->maxLength('nombreTipo_producto', 45)
            ->allowEmptyString('nombreTipo_producto');

        return $validator;
    }
}
